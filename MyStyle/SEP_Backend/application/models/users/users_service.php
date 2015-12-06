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
        $this->db->from('admin_users');
        $this->db->where('email',$users_model->getEmail());
        $this->db->where('password',md5($users_model->getPassword()));

        $query= $this->db->get();

//         echo $this->db->last_query();
//    die();
        return $query->row();
    }


    /*
     * update admin online status
     */
    public function update_users($user_id,$status)
    {
        $this->db->set('online',$status);
        $this->db->where('id',$user_id);

        $this->db->update('admin_users');
    }






}



?>