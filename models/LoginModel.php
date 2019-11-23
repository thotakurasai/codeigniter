<?php

class LoginModel extends CI_Model{

    public function login_valid($username, $password)
    {
        $q = $this->db->where(['uname'=>$username,'pword'=>$password])
                    ->get('userss');
        if($q->num_rows()){
            return $q->row()->id;
        }else{
            return FALSE;
        }
    }
}  