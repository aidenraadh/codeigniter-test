<?php

class M_User extends CI_Model{
    public function get_data(){
        return $this->db->get('users')->result_array();
    }
}