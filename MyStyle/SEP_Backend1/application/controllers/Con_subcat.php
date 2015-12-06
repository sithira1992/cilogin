<?php

class Con_subcat extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index($message = "")
    {

        $error['message'] = $message;

        $this->load->view('Template/template');
        $this->load->model('mod_loaddata');
        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;

        $query = $this->mod_loaddata->subcontentlist();
        $data['result'] = $query->result();

        $query1 = $this->mod_loaddata->contentlist();
        $data['maincat'] = $query1->result();

        $this->load->view('Template/template', $data);
        $this->load->view('Categories/subcat_table', $data);
    }


    function insert()
    {


        $name = $this->input->post('subcat_name');
        $maincat = $this->input->post('select');
        $description = $this->input->post('description');

        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;
        $this->load->model('mod_loaddata');
        $data_object = $this->mod_loaddata->insert_subcat($name,$maincat,$description);

        $query = $this->mod_loaddata->subcontentlist();
        $data['result'] = $query->result();

        $query1 = $this->mod_loaddata->contentlist();
        $data['maincat'] = $query1->result();

        $this->load->view('Template/template', $data);
        $this->load->view('Categories/subcat_table', $data);

    }


    function deletesubcat(){      //delete subcategory
        $this->load->model('mod_loaddata');

        $items = $this->mod_loaddata->get_details();
        $count=0;

        foreach($items->result() as $row){
            if($row->sub_cat == $this->input->get("var2"))
            {
                $count=$count+1;
            }

         }

        if($count == 0) {


            if ($this->mod_loaddata->deletesubcat($this->input->get("var1"))) {
                $data['succ_message'] = "Subcategory deleted";

                $this->load->model('mod_loaddata');


                $user_name = $this->session->userdata('user_name');
                $data['user_name'] = $user_name;
                $this->load->model('mod_loaddata');

                $query = $this->mod_loaddata->subcontentlist();
                $data['result'] = $query->result();

                $query1 = $this->mod_loaddata->contentlist();
                $data['maincat'] = $query1->result();

                $this->load->view('Template/template', $data);
                $this->load->view('Categories/subcat_table', $data);


            }
            else
            {
                $data['error_message'] = "Sub Category not deleted. ";
            }
        }
        else
        {
            $data['error_message'] = "Sub Category Contain Products.Sub Category not deleted.";
            $user_name = $this->session->userdata('user_name');
            $data['user_name'] = $user_name;
            $this->load->model('mod_loaddata');

            $query = $this->mod_loaddata->subcontentlist();
            $data['result'] = $query->result();

            $query1 = $this->mod_loaddata->contentlist();
            $data['maincat'] = $query1->result();

            $this->load->view('Template/template', $data);
            $this->load->view('Categories/subcat_table', $data);
        }
    }
}