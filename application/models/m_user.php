<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_user extends CI_Model
{
    public function get_user($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('user')->row_array();
    }

    public function edit($name, $email)
    {
        $this->db->set('name', $name);
        $this->db->where('email', $email);
        $this->db->update('user');
    }
}
?>