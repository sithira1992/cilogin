<?php


class Con_csr extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {
        $this->load->model('mod_loaddata');
        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;
        $query1 = $this->mod_loaddata->csr();
        $data['data'] = $query1->result();

        $this->load->view('Tempelate/template', $data);
        $this->load->view('csr',$data);

    }

}
