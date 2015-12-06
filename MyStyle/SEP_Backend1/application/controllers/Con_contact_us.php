<?php

class Con_contact_us extends CI_Controller
{

    function index($message = "")
    {
        $error['message'] = $message;

        $this->load->view('Template/template');
        $this->load->model('Mod_contactus');

        $query = $this->Mod_contactus->getdetails();
        $data['details'] = $query->result();

        $this->load->view('Company Details/contact_us', $data, $error);


    }

    function insert_contact()
    {

        $Address =$this->input->post('address');
        $Telephone = $this->input->post('tel');
        $Hot_line =$this->input->post('Hot_line');
        $Fax=$this->input->post('fax');

        $this->load->model('Mod_upload');

        $data_object = $this->Mod_upload->set_contact($Address, $Telephone,$Hot_line,$Fax);
        $this->index();
    }


}

