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
        $email = $this->session->userdata('email'); //Wajib ada
        $role_id = $this->session->userdata('role_id'); //Wajib ada
        $data['title'] = 'Dashboard';
        $data['user'] = $this->m_user->get_user($email); //Wajib ada
        $data['menus'] = $this->m_menu->get_menu($role_id); //Wajib ada

        $this->load->view('templetes/header', $data);
        $this->load->view('templetes/sidebar', $data);
        $this->load->view('templetes/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templetes/footer');
    }

    public function role()
    {
        $this->load->model('m_role'); //Wajib ada
        $email = $this->session->userdata('email'); //Wajib ada
        $role_id = $this->session->userdata('role_id'); //Wajib ada
        $data['title'] = 'Role';
        $data['user'] = $this->m_user->get_user($email); //Wajib Ada
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
        $email = $this->session->userdata('email'); //Wajib ada
        $roleId = $this->session->userdata('role_id'); //Wajib ada
        $data['title'] = 'Role Access';
        $data['user'] = $this->m_user->get_user($email); //Wajib ada
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
}