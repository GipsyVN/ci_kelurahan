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

    public function formSurat($surat_id)
    {
        $email = $this->session->userdata('email');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Cetak Surat';
        $data['user'] = $this->m_user->get_user($email);
        $data['menus'] = $this->m_menu->get_menu($role_id);

        if ($surat_id == 1) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 2) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 3) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 4) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 5) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 6) {
            // $this->load->view('templetes/header', $data);
            // $this->load->view('templetes/sidebar', $data);
            // $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            // $this->load->view('templetes/footer');
        } else if ($surat_id == 7) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/f_sk_usaha');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 8) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 9) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/f_sk_belum_ada_rumah');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 10) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 11) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/f_sk_belum_nikah');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 12) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 13) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 14) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 15) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 16) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 17) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        } else if ($surat_id == 18) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
        }
    }

    public function test()
    {
        $data = [
            'date' => $this->input->post('tang_lahir')
        ];

        echo $data['date'];
    }
}