<?php

class Con_details extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }


    function index($message = "")
    {
        $this->load->helper('url');
        $this->load->model('Mod_images');
        $this->load->model('Mod_items');


    $data['var1'] = $this->input->get("var1");









      // $data['images'] = $this->Mod_images->content();

       $data['var2'] =$this->Mod_items->getdescription($this->input->get("var1"));

        $data['var3'] = $this->Mod_items->contentim($this->input->get("var1"));


        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;


        $this->load->view('header',$data);
        $this->load->view('Details_page',$data);
    }

}