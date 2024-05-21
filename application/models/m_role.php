<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_role extends CI_Model
{
    public function get_role()
    {
        return $this->db->get('user_role')->result_array();
    }
}