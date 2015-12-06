<?php

class Con_category extends CI_Controller
{
    function index($message = "")
    {

        $error['message'] = $message;

        $this->load->model('mod_loaddata');


        $query = $this->mod_loaddata->get_detailscat();
        $data['result'] = $query->result();
        $this->load->view('Categories/category_table', $data);
}

}