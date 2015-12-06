<?php


class Con_MailReceived extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index($message = "")
    {
        $this->load->view('Template/template');
        $this->load->model('mod_loaddata');
        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;

        $query1 = $this->mod_loaddata->mails();
        $data['data'] = $query1->result();

        $this->load->view('MailReceived',$data);

    }

}