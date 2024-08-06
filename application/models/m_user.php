<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_user extends CI_Model
{
    public function get_user($user_id)
    {
        $this->db->where('id', $user_id);
        return $this->db->get('user')->row_array();
    }

    public function edit($user_id, $data)
    {
        $this->db->set('name', $data['name']);
        $this->db->set('email', $data['email']);
        $this->db->where('id', $user_id);
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

    public function get_all_user()
    {
        $queryMenu = "SELECT `user`.`role_id`, `user`.`id`, `name`, `email`, `image`, `date_created`, `role` FROM `user` JOIN `user_role` 
        ON `user`.`role_id` = `user_role`.`id`";
        return $this->db->query($queryMenu)->result_array();
    }

    public function get_sp_user($user_id)
    {
        $queryMenu = "SELECT `user`.`role_id`, `user`.`nip` , `user`.`id`, `name`, `email`, `image`, `date_created`, `role` FROM `user` JOIN `user_role` 
        ON `user`.`role_id` = `user_role`.`id` WHERE `user`.`id` = '$user_id'";
        return $this->db->query($queryMenu)->row_array();
    }

    public function hapus_user($user_id)
    {
        $this->db->where('id', $user_id);
        $this->db->delete('user');

        $this->db->where('id_user', $user_id);
        $query = $this->db->get('user_medsos');
        if ($query->num_rows() > 0) {
            // id_user does exist, delete the record
            $this->db->where('id_user', $user_id);
            $this->db->delete('user_medsos');
        }
    }

    public function tambah_user($data)
    {
        $this->db->insert('user', $data);
    }

    public function update_user_role($user_id, $role_id)
    {
        $this->db->set('role_id', $role_id);
        $this->db->where('id', $user_id);
        $this->db->update('user');
    }

    public function update_user_password($profile_id, $new_password)
    {
        $this->db->set('password', $new_password);
        $this->db->where('id', $profile_id);
        $this->db->update('user');
    }

    public function lurah()
    {
        return $this->db->get('user_lurah')->row_array();
    }
}
?>