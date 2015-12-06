<?php

class Con_customers extends CI_Controller
{
    function index($message = "")
    {

        $error['message'] = $message;

        $this->load->model('mod_loaddata');


        $query = $this->mod_loaddata->get_detailscust();
        $data['result'] = $query->result();
        $this->load->view('Customers/customer_table', $data);
    }

}