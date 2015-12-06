<?php

class Con_details extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }


    function index()
    {
        $this->load->helper('url');
        $this->load->model('Mod_images');
        $this->load->model('Mod_items');
        $this->load->model('Mod_navigation');


        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;

        $data['var1'] = $this->input->get("var1");

        $query1 = $this->Mod_navigation->getmaincategories(); //Managing retrieved main cat data
        $data['maincat'] = $query1->result();

        $query2 = $this->Mod_navigation->getsubcategories();//Managing retrieved sub categories
        $data['subcat'] = $query2->result();


        $query3 = $this->Mod_items->getcomments($this->input->get("var1"));
        $data['comments'] = $query3->result();




        // $data['images'] = $this->Mod_images->content();

        $sql =$this->Mod_items->contentdetail($this->input->get("var1"));

        $data['var2'] = $sql->row();

        $this->load->view('header',$data);
        $this->load->view('Details_page',$data);
        $this->load->view('footer');
    }

}