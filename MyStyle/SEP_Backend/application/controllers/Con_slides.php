<?php


class Con_slides extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index($message = "")
    {
        $this->load->model('mod_loaddata');
        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;

        $query1 = $this->mod_loaddata->slides();
        $data['data'] = $query1->result();


        $this->load->view('Tempelate/tempalete', $data);

        $this->load->view('slides',$data);

    }

}
