<?php

class Users_service extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users/users_model');
    }


    public function authenticateUser($users_model){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$users_model->getEmail());
        $this->db->where('password',md5($users_model->getPassword()));

        $query= $this->db->get();

//         echo $this->db->last_query();
//    die();
        return $query->row();
    }



}



?>