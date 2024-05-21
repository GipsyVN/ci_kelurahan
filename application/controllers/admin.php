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
        $email = $this->session->userdata('email');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Dashboard';
        $data['user'] = $this->m_user->get_user($email);
        $data['menus'] = $this->m_menu->get_menu($role_id);

        $this->load->view('templetes/header', $data);
        $this->load->view('templetes/sidebar', $data);
        $this->load->view('templetes/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templetes/footer');
    }

    public function role()
    {
        $this->load->model('m_role');
        $email = $this->session->userdata('email');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Role';
        $data['user'] = $this->m_user->get_user($email);
        $data['menus'] = $this->m_menu->get_menu($role_id);
        $data['roles'] = $this->m_role->get_role();

        $this->load->view('templetes/header', $data);
        $this->load->view('templetes/sidebar', $data);
        $this->load->view('templetes/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templetes/footer');
    }
}