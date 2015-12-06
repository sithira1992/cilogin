<?php

class Con_category extends CI_Controller
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

        $query = $this->mod_loaddata->get_detailscat();
        $data['result'] = $query->result();
        $this->load->view('Tempelate/template', $data);
        $this->load->view('Categories/category_table', $data);
    }


    function insert()  //Insert Category
    {



        $name = $this->input->post('product_name');
        $description = $this->input->post('description');
        $date = "20".date('y-m-d');

        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;
        $this->load->model('mod_loaddata');
        if($this->mod_loaddata->Insert_cat($name,$description,$date))
        {
            $data['succ_message'] = "Category Inserted Sucesfully";
        }
        else
        {
            $data['error_message'] = "Error Occured.Category not Inserted";
        }


        $query = $this->mod_loaddata->get_detailscat();
        $data['result'] = $query->result();
        $this->load->view('Tempelate/template', $data);
        $this->load->view('Categories/category_table', $data);

    }

}