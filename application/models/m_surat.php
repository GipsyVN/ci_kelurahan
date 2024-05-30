<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_surat extends CI_Model
{
    public function get_surat($role_id)
    {
        if($role_id == 1){
            return $this->db->get('user_surat')->result_array();
        }else{
            $querySubMenu = "SELECT * FROM `user_access_surat` JOIN `user_surat`
                ON `user_access_surat`.`surat_id` = `user_surat`.`id`
                WHERE `user_access_surat`.`role_id` = $role_id";
    
            return $this->db->query($querySubMenu)->result_array();
        }
    }
}