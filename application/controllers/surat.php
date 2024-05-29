<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
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
        $this->load->model('m_surat');
        $email = $this->session->userdata('email');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Cetak Surat';
        $data['user'] = $this->m_user->get_user($email);
        $data['menus'] = $this->m_menu->get_menu($role_id);
        $data['surat'] = $this->m_surat->get_surat($role_id);

        $this->load->view('templetes/header', $data);
        $this->load->view('templetes/sidebar', $data);
        $this->load->view('templetes/topbar', $data);
        $this->load->view('surat/list_surat', $data);
        $this->load->view('templetes/footer');
    }

    public function arsip()
    {
        echo "Ini adalah menu arsip";
    }
}