<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $role_id = $this->session->userdata('role_id'); //Wajib ada
        $user_id = $this->session->userdata('user_id');
        $data['title'] = 'Dashboard';
        $data['user'] = $this->m_user->get_user($user_id); //Wajib ada
        $data['menus'] = $this->m_menu->get_menu($role_id); //Wajib ada

        $this->load->view('templetes/header', $data);
        $this->load->view('templetes/sidebar', $data);
        $this->load->view('templetes/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templetes/footer');
    }

    public function role()
    {
        $this->load->model('m_role'); //Wajib ada
        $user_id = $this->session->userdata('user_id'); //Wajib ada
        $role_id = $this->session->userdata('role_id'); //Wajib ada
        $data['title'] = 'Role';
        $data['user'] = $this->m_user->get_user($user_id); //Wajib Ada
        $data['menus'] = $this->m_menu->get_menu($role_id); //Wajib ada
        $data['roles'] = $this->m_role->get_role();

        $this->load->view('templetes/header', $data);
        $this->load->view('templetes/sidebar', $data);
        $this->load->view('templetes/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templetes/footer');
    }

    public function roleAccess($role_id)
    {
        $this->load->model('m_role');
        $user_id = $this->session->userdata('user_id'); //Wajib ada
        $roleId = $this->session->userdata('role_id'); //Wajib ada
        $data['title'] = 'Role Access';
        $data['user'] = $this->m_user->get_user($user_id); //Wajib ada-
        $data['menus'] = $this->m_menu->get_menu($roleId); //Wajib ada
        $data['menu'] = $this->m_menu->menu(); //Menus != Menu, menus untuk sidebar sedangkan menu untuk content admin/roleaccess
        $data['roles'] = $this->m_role->getRoleAccess($role_id);

        $this->load->view('templetes/header', $data);
        $this->load->view('templetes/sidebar', $data);
        $this->load->view('templetes/topbar', $data);
        $this->load->view('admin/roleaccess', $data);
        $this->load->view('templetes/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Akses Telah Diubah!
        </div>');
    }

    public function user_manage()
    {
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'User';
        $data['user'] = $this->m_user->get_user($user_id); //User yang aktif di session ini
        $data['users'] = $this->m_user->get_all_user(); //mengambil semua user dari table
        $data['menus'] = $this->m_menu->get_menu($role_id);

        $this->load->view('templetes/header', $data);
        $this->load->view('templetes/sidebar', $data);
        $this->load->view('templetes/topbar', $data);
        $this->load->view('admin/user_manage', $data);
        $this->load->view('templetes/footer');
    }

    public function hapus_user($user_id)
    {
        $this->m_user->hapus_user($user_id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        User Berhasil Dihapus!
        </div>');
        redirect('admin/user_manage');
    }

    public function tambah_user()
    {
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'User';
        $data['user'] = $this->m_user->get_user($user_id); //User yang aktif di session ini
        $data['users'] = $this->m_user->get_all_user(); //mengambil semua user dari table
        $data['menus'] = $this->m_menu->get_menu($role_id);

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Tidak Boleh Kosong!',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Format Email Salah!',
            'required' => 'Email Tidak Boleh Kosong!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password1]', [
            'matches' => 'Password tidak cocok!!',
            'min_length' => 'Password minimal 8 karakter!',
            'required' => 'Password Tidak Boleh Kosong!',
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password]', [
            'matches' => 'Password tidak cocok!!',
            'min_length' => 'Password minimal 8 karakter!',
            'required' => 'Bagian ini Tidak Boleh Kosong!',
        ]);
        $this->form_validation->set_rules('role', 'Role', 'required', [
            'required' => 'Role Tidak Boleh Kosong!',
        ]);
        $this->form_validation->set_rules('nip', 'NIP', 'trim|max_length[18]|is_unique[user.nip]', [
            'mix_length' => 'NIP Maksimal 18 Karakter!',
            'is_unique' => 'NIP ini sudah terdaftar!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data yang Diisi Tidak Valid! Silahkan Ulangi Lagi!
            </div>');
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('admin/user_manage', $data);
            $this->load->view('templetes/footer');
        } else {
            $data = [
                'id' => '',
                'name' => $this->input->post('nama'),
                'nip' => $this->input->post('nip'),
                'golongan' => $this->input->post('gol'),
                'email' => $this->input->post('email'),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role'),
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->m_user->tambah_user($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            User Berhasil Ditambahkan!
            </div>');
            redirect('admin/user_manage');
        }
    }

    public function user_detail($profile_id)
    {
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'User';
        $data['user'] = $this->m_user->get_user($user_id); //User yang aktif di session ini
        $data['menus'] = $this->m_menu->get_menu($role_id);
        $data['users'] = $this->m_user->get_sp_user($profile_id); // mengambil detail user yang dipilih

        $this->load->view('templetes/header', $data);
        $this->load->view('templetes/sidebar', $data);
        $this->load->view('templetes/topbar', $data);
        $this->load->view('admin/user_detail', $data);
        $this->load->view('templetes/footer');
    }

    public function update_role_user($user_id)
    {
        $this->form_validation->set_rules('role', 'Role', 'required', [
            'required' => 'Role Tidak Boleh Kosong!',
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Role Tidak Boleh Kosong!
            </div>');
            redirect('admin/user_detail/' . $user_id);
        } else {
            $new_role = $this->input->post('role');
            $this->m_user->update_user_role($user_id, $new_role);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Role Berhasil Diubah!
            </div>');
            redirect('admin/user_detail/' . $user_id);
        }
    }

    public function update_password_user($profile_id)
    {
        $admin_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'User Profile';
        $data['user'] = $this->m_user->get_user($admin_id); //admin yang aktif di session ini
        $data['menus'] = $this->m_menu->get_menu($role_id);
        $data['users'] = $this->m_user->get_sp_user($profile_id); // mengambil detail user yang dipilih

        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password1]', [
            'matches' => 'Password Baru Tidak Cocok!',
            'required' => 'Password Tidak Boleh Kosong!',
            'min_length' => 'Password Baru Minimal 8 Karakter!',
        ]);
        $this->form_validation->set_rules('password1', 'New Password', 'required|trim|min_length[8]|matches[password]', [
            'matches' => 'Password Baru Tidak Cocok!',
            'min_length' => 'Password Baru Minimal 8 Karakter!',
            'required' => 'Bagian ini Tidak Boleh Kosong!',
        ]);
        $this->form_validation->set_rules('password_admin', 'Password Admin', 'required|trim', [
            'min_length' => 'Password Anda Minimal 8 Karakter!',
            'required' => 'Bagian ini Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Input tidak valid!
            </div>');
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('admin/user_detail', $data);
            $this->load->view('templetes/footer');
        } else {
            $new_password = $this->input->post('password');
            $password_admin = $this->input->post('password_admin');
            $admin = $this->m_user->get_user($admin_id);

            if ($admin && password_verify($password_admin, $admin['password'])) {
                // Password is correct
                $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                $this->m_user->update_user_password($profile_id, $password_hash);
                // Redirect or load success view
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Password Berhasil Direset!
                </div>');
                redirect('admin/user_detail/' . $profile_id);
            } else {
                // Invalid credential
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Kredensial Admin Tidak Cocok!
                </div>');
                redirect('admin/user_detail/' . $profile_id);
            }

        }
    }
}