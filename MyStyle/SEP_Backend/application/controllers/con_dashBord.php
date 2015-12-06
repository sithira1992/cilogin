<?php

class Con_dashBord extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index($message = "")
    {

        $error['message'] = $message;

        $this->load->model('mod_loaddata');
        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

        $query = $this->mod_loaddata->get_detailscust();
        $data['result'] = $query->result();


        //newly added start

        $this->load->model('users_model1');

        //Load the session library
        $this->load->library('session');

        // Redirect if not logged
        $sessionUserID = $this->session->userdata('user_id');
        if(!$sessionUserID)
            redirect('login_controller');

        //Get all users
        $this->outputData['listOfUsers']	= $this->users_model1->getUsers();

        $this->load->model('mod_loaddata');
        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

        $query = $this->mod_loaddata->get_detailscust();
        $data['result'] = $query->result();
        $userdata  = $this->session->all_userdata();
        $this->outputData['session_dataa'] = $userdata;

        //$this->load->view('chat/userList',$this->outputData);
        $this->load->view('Tempelate/template', $data);
        $this->load->view('DashBoard/index', $this->outputData);


        //end
    }



}