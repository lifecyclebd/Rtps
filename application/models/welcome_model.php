<?php

class Welcome_Model extends CI_Model {

    //put your code here
    public function save_user($data) {
        if ($data['password'] == $data['confirm_password']) {
            $this->db->insert('tbl_user', $data);
        } else {
            $message = "'Password dosen't match ";
            return $message;
        }
    }

    public function login_check($email,$password) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    

}
