<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $this->load->model('m_menu');
        $this->load->model('m_user');
        $email = $this->session->userdata('email');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'My Profile';
        $data['user'] = $this->m_user->get_user($email);
        $data['menus'] = $this->m_menu->get_menu($role_id);

        $this->load->view('templetes/header', $data);
        $this->load->view('templetes/sidebar', $data);
        $this->load->view('templetes/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templetes/footer');
    }
}