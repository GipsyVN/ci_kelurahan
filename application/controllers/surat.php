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
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Cetak Surat';
        $data['user'] = $this->m_user->get_user($user_id);
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
        $this->load->model('m_surat');
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Arsip';
        $data['user'] = $this->m_user->get_user($user_id);
        $data['menus'] = $this->m_menu->get_menu($role_id);
        $data['surat'] = $this->m_surat->get_surat($role_id);

        $this->load->view('templetes/header', $data);
        $this->load->view('templetes/sidebar', $data);
        $this->load->view('templetes/topbar', $data);
        $this->load->view('surat/arsip', $data);
        $this->load->view('templetes/footer');
    }

    public function formSurat($surat_id)
    {
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Cetak Surat';
        $data['user'] = $this->m_user->get_user($user_id);
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
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/test');
            $this->load->view('templetes/footer');
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
            $this->load->view('surat/form/f_sk_janda_duda');
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

    public function ket_usaha()
    {
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Cetak Surat';
        $data['user'] = $this->m_user->get_user($user_id);
        $data['menus'] = $this->m_menu->get_menu($role_id);

        $this->form_validation->set_rules('noSurat', 'No Surat', 'required|trim', [
            'required' => 'Nomor Surat Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Pemohon Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|min_length[16]|max_length[16]|numeric', [
            'required' => 'NIK Tidak Boleh Kosong!',
            'min_length' => 'NIK Minimal 16 Digit!',
            'max_length' => 'NIK Maximal 16 Digit!',
            'numeric' => 'NIK Harus Berupa Angka!'
        ]);
        $this->form_validation->set_rules('tem_lahir', 'Tempat Lahir', 'required|trim', [
            'required' => 'Tempat Lahir Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('tang_lahir', 'Tanggal Lahir', 'required|trim', [
            'required' => 'Tanggal Lahir Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Harus Dipilih!'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim', [
            'required' => 'Pekerjaan Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat Tempat Tinggal Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('status', 'Status Usaha', 'required|trim', [
            'required' => 'Status Usaha Harus Dipilih!'
        ]);

        if ($this->input->post('status') == 'Beroperasi') {
            $this->form_validation->set_rules('noSuratRT', 'No Surat RT', 'required|trim', [
                'required' => 'Nomor Surat dari RT Harus Diisi!'
            ]);
            $this->form_validation->set_rules('tang_surat', 'Tanggal Surat', 'required|trim', [
                'required' => 'Tanggal Surat Harus Diisi!'
            ]);
            $this->form_validation->set_rules('j_usaha', 'Jenis Usaha', 'required|trim', [
                'required' => 'Jenis Usaha Harus Diisi!'
            ]);
            $this->form_validation->set_rules('a_usaha', 'Alamat Usaha', 'required|trim', [
                'required' => 'Alamat Harus Diisi!'
            ]);
        } else if ($this->input->post('status') == 'Tidak Beroperasi') {
            $this->form_validation->set_rules('namaUsaha', 'Nama Usaha', 'required|trim', [
                'required' => 'Nama Usaha Harus Diisi!'
            ]);
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/f_sk_usaha');
            $this->load->view('templetes/footer');
        } else {
            if ($this->input->post('status') == 'Beroperasi') {
                $tanggal_lahir = $this->input->post('tang_lahir');
                $formatted_tanggal_lahir = $this->__format_tanggal($tanggal_lahir);
                $tanggal_surat = $this->input->post('tang_surat');
                $formatted_tanggal_surat = $this->__format_tanggal($tanggal_surat);


                $data = [
                    'no_surat' => $this->input->post('noSurat'),
                    'nama' => $this->input->post('nama'),
                    'nik' => $this->input->post('nik'),
                    'tempat_lahir' => $this->input->post('tem_lahir'),
                    'tanggal_lahir' => $formatted_tanggal_lahir,
                    'jenis_kelamin' => $this->input->post('j_kelamin'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat_tempat_tinggal' => $this->input->post('alamat'),
                    'status_usaha' => $this->input->post('status'),
                    'no_rt' => $this->input->post('noSuratRT'),
                    'tanggal_surat' => $formatted_tanggal_surat,
                    'jenis_usaha' => $this->input->post('j_usaha'),
                    'alamat_usaha' => $this->input->post('a_usaha'),
                ];

                $this->load->view('surat/template/sk_usaha', $data);

            } else if ($this->input->post('status') == 'Tidak Beroperasi') {
                $tanggal_lahir = $this->input->post('tang_lahir');
                $formatted_tanggal_lahir = $this->__format_tanggal($tanggal_lahir);

                $data = [
                    'no_surat' => $this->input->post('noSurat'),
                    'nama' => $this->input->post('nama'),
                    'nik' => $this->input->post('nik'),
                    'tempat_lahir' => $this->input->post('tem_lahir'),
                    'tanggal_lahir' => $formatted_tanggal_lahir,
                    'jenis_kelamin' => $this->input->post('j_kelamin'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat_tempat_tinggal' => $this->input->post('alamat'),
                    'status_usaha' => $this->input->post('status'),
                    'nama_usaha' => $this->input->post('namaUsaha'),
                ];

                $this->load->view('surat/template/sk_usaha_ta', $data);
            }
        }
    }

    public function ket_janda_duda()
    {
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Cetak Surat';
        $data['user'] = $this->m_user->get_user($user_id);
        $data['menus'] = $this->m_menu->get_menu($role_id);

        $this->form_validation->set_rules('noSurat', 'No Surat', 'required|trim', [
            'required' => 'Nomor Surat Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Pemohon Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|min_length[16]|max_length[16]|numeric', [
            'required' => 'NIK Tidak Boleh Kosong!',
            'min_length' => 'NIK Minimal 16 Digit!',
            'max_length' => 'NIK Maximal 16 Digit!',
            'numeric' => 'NIK Harus Berupa Angka!'
        ]);
        $this->form_validation->set_rules('tem_lahir', 'Tempat Lahir', 'required|trim', [
            'required' => 'Tempat Lahir Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('tang_lahir', 'Tanggal Lahir', 'required|trim', [
            'required' => 'Tanggal Lahir Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Harus Dipilih!'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim', [
            'required' => 'Pekerjaan Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat Tempat Tinggal Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('no_akta', 'Nomor Akta', 'required|trim', [
            'required' => 'Nomor Akta Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/f_sk_janda_duda');
            $this->load->view('templetes/footer');
        } else {
            $tanggal_lahir = $this->input->post('tang_lahir');
            $formatted_tanggal_lahir = $this->__format_tanggal($tanggal_lahir);

            if ($this->input->post('j_kelamin') == 'Laki - Laki') {
                $ket = "Duda";
            } else if ($this->input->post('j_kelamin') == 'Perempuan') {
                $ket = "Janda";
            }

            $data = [
                'no_surat' => $this->input->post('noSurat'),
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'tempat_lahir' => $this->input->post('tem_lahir'),
                'tanggal_lahir' => $formatted_tanggal_lahir,
                'jenis_kelamin' => $this->input->post('j_kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat_tempat_tinggal' => $this->input->post('alamat'),
                'no_akta' => $this->input->post('no_akta'),
                'ket' => $ket
            ];

            $this->load->view('surat/template/sk_janda_duda', $data);
        }

    }

    public function ket_rumah()
    {
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Cetak Surat';
        $data['user'] = $this->m_user->get_user($user_id);
        $data['menus'] = $this->m_menu->get_menu($role_id);

        $this->form_validation->set_rules('noSurat', 'No Surat', 'required|trim', [
            'required' => 'Nomor Surat Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Pemohon Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|min_length[16]|max_length[16]|numeric', [
            'required' => 'NIK Tidak Boleh Kosong!',
            'min_length' => 'NIK Minimal 16 Digit!',
            'max_length' => 'NIK Maximal 16 Digit!',
            'numeric' => 'NIK Harus Berupa Angka!'
        ]);
        $this->form_validation->set_rules('tem_lahir', 'Tempat Lahir', 'required|trim', [
            'required' => 'Tempat Lahir Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('tang_lahir', 'Tanggal Lahir', 'required|trim', [
            'required' => 'Tanggal Lahir Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Harus Dipilih!'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim', [
            'required' => 'Pekerjaan Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat Tempat Tinggal Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/f_sk_belum_ada_rumah');
            $this->load->view('templetes/footer');
        } else {
            $tanggal_lahir = $this->input->post('tang_lahir');
            $formatted_tanggal_lahir = $this->__format_tanggal($tanggal_lahir);
            $tanggal_surat = $this->input->post('tang_surat');
            $formatted_tanggal_surat = $this->__format_tanggal($tanggal_surat);

            $data = [
                'no_surat' => $this->input->post('noSurat'),
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'tempat_lahir' => $this->input->post('tem_lahir'),
                'tanggal_lahir' => $formatted_tanggal_lahir,
                'jenis_kelamin' => $this->input->post('j_kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat_tempat_tinggal' => $this->input->post('alamat'),
                'no_rt' => $this->input->post('noSuratRT'),
                'tanggal_surat' => $formatted_tanggal_surat
            ];

            $this->load->view('surat/template/sk_belum_rumah', $data);
        }
    }

    public function simpan_arsip($surat_id)
    {
        $user_id = $this->session->userdata('user_id');
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Cetak Surat';
        $data['user'] = $this->m_user->get_user($user_id);
        $data['menus'] = $this->m_menu->get_menu($role_id);

        //validasi Umum
        $this->form_validation->set_rules('noSurat', 'No Surat', 'required|trim', [
            'required' => 'Nomor Surat Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Pemohon Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('tem_lahir', 'Tempat Lahir', 'required|trim', [
            'required' => 'Tempat Lahir Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('tang_lahir', 'Tanggal Lahir', 'required|trim', [
            'required' => 'Tanggal Lahir Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Harus Dipilih!'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim', [
            'required' => 'Pekerjaan Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat Tempat Tinggal Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('no_akta', 'Nomor Akta', 'required|trim', [
            'required' => 'Nomor Akta Tidak Boleh Kosong!'
        ]);

        //validasi khusus @TODO: coming soon
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|min_length[16]|max_length[16]|numeric', [
            'required' => 'NIK Tidak Boleh Kosong!',
            'min_length' => 'NIK Minimal 16 Digit!',
            'max_length' => 'NIK Maximal 16 Digit!',
            'numeric' => 'NIK Harus Berupa Angka!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templetes/header', $data);
            $this->load->view('templetes/sidebar', $data);
            $this->load->view('templetes/topbar', $data);
            $this->load->view('surat/form/f_sk_janda_duda');
            $this->load->view('templetes/footer');
        } else {
            $tanggal_lahir = $this->input->post('tang_lahir');
            $formatted_tanggal_lahir = $this->__format_tanggal($tanggal_lahir);

            $data = [
                'no_surat' => $this->input->post('noSurat'),
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'tempat_lahir' => $this->input->post('tem_lahir'),
                'tanggal_lahir' => $formatted_tanggal_lahir,
                'jenis_kelamin' => $this->input->post('j_kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat_tempat_tinggal' => $this->input->post('alamat'),
                'no_akta' => $this->input->post('no_akta'),
            ];

            $this->load->view('surat/template/sk_janda_duda', $data);
        }
    }

    public function __format_tanggal($tanggal)
    {
        $months = array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        );

        $dateObj = DateTime::createFromFormat('Y-m-d', $tanggal);
        if ($dateObj) {
            $day = $dateObj->format('d');
            $month = $dateObj->format('m');
            $year = $dateObj->format('Y');
            return $day . ' ' . $months[$month] . ' ' . $year;
        } else {
            return $tanggal; // Return original date if parsing fails
        }
    }
}