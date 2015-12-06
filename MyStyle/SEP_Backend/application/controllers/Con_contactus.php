<?php

class Con_contactus extends CI_Controller{

    function index($message = "")
    {

        $error['message'] = $message;
        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

        $this->load->model('Mod_contactus');

        $query = $this->Mod_contactus->getdetails();
        $data['details'] = $query->result();

        $this->load->view('Tempelate/tempalete', $data);

        $this->load->view('contactus',$data, $error);

    }
}