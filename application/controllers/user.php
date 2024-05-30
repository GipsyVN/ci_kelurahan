<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('m_menu');
        $this->load->model('m_user');
    }
    public function index()
    {

        $email = $this->session->userdata('email');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Profile';
        $data['user'] = $this->m_user->get_user($email);
        $data['menus'] = $this->m_menu->get_menu($role_id);

        $this->load->view('templetes/header', $data);
        $this->load->view('templetes/sidebar', $data);
        $this->load->view('templetes/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templetes/footer');
    }

    public function edit()
    {
        $email = $this->session->userdata('email');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->m_user->get_user($email);
        $data['menus'] = $this->m_menu->get_menu($role_id);

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim', [
            'required' => 'Nama Lengkap Tidak Boleh Kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templetes/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            //cek gambar
            $upload = $_FILES['image']['name'];
            if ($upload) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('user');
                }
            }

            $this->m_user->edit($name, $email);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Profil telah diupdate!
          </div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $email = $this->session->userdata('email');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Ubah Password';
        $data['user'] = $this->m_user->get_user($email);
        $data['menus'] = $this->m_menu->get_menu($role_id);

        $this->form_validation->set_rules('current_password', "Current Password", 'required|trim', [
            'required' => 'Bagian ini diperlukan!'
        ]);
        $this->form_validation->set_rules('new_password1', "New Password", 'required|trim|min_length[3]|matches[new_password2]', [
            'matches' => "'Ulangi Password Baru' tidak cocok dengan 'Password Baru'",
            'required' => 'Bagian ini diperlukan!'
        ]);
        $this->form_validation->set_rules('new_password2', "Confirm New Password", 'required|trim|min_length[3]|matches[new_password1]', [
            'matches' => "'Ulangi Password Baru' tidak cocok dengan 'Password Baru'",
            'required' => 'Bagian ini diperlukan!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templetes/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password Tidak Cocok!
                </div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password Baru tidak boleh sama dengan Password Lama!
                    </div>');
                    redirect('user/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Telah Diubah!
                    </div>');
                    redirect('user/changepassword');
                }
            }
        }

    }
}