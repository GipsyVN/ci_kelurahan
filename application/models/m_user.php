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

    public function edit_medsos($user_id, $data)
    {
        $this->db->where('id_user', $user_id);
        $query = $this->db->get('user_medsos');

        if ($query->num_rows() == 0) {
            // id_user does not exist, insert a new record with id_user
            $this->db->insert('user_medsos', array('id_user' => $user_id));
        }

        // Set the data fields
        $this->db->set('twitter', $data['twitter']);
        $this->db->set('instagram', $data['instagram']);
        $this->db->set('facebook', $data['facebook']);
        $this->db->where('id_user', $user_id);
        $this->db->update('user_medsos');
    }

    public function get_medsos($user_id)
    {
        $this->db->where('id_user', $user_id);
        return $this->db->get('user_medsos')->row_array();
    }

    public function get_role_name($role_id)
    {
        $this->db->where('id', $role_id);
        return $this->db->get('user_role')->row_array();
    }

}
?>