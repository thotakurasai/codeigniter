<?php 
class UserModel extends CI_Model{
    public function getUsers()
    {
        $this->load->database();

        
        $this->db->where('id',1);
        $sql = $this->db->get("student_info"); //select * from student_info

        return $sql->result_array();
    }


}