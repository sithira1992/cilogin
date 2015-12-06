<?php

class Con_customers extends CI_Controller
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
        if(!$user_name)
            redirect('login_controller');

        $query = $this->mod_loaddata->get_detailscust();
        $data['result'] = $query->result();
        $this->load->view('Tempelate/template', $data);
        $this->load->view('Customers/customer_table', $data);
    }


    function delete($customer_id){
        $this->load->model('mod_loaddata');
        if($this->mod_loaddata->deletecust($customer_id)) {
            $data['succ_message'] = "customer deleted";

        //  $this->load->model('mod_loaddata');

            $this->load->model('mod_loaddata');
            $user_name = $this->session->userdata('user_name');
            $data['user_name']=$user_name;

            $query = $this->mod_loaddata->get_detailscust();
            $data['result'] = $query->result();

            $this->load->view('Customers/customer_table', $data);

        }else
        {
            $data['error_message'] = "Item not deleted";
        }
    }

}