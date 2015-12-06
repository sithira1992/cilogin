<?php

class Con_contact_us extends CI_Controller
{

    function index($message = "")
    {
        $error['message'] = $message;

        $this->load->model('Mod_contactus');

        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

        $query = $this->Mod_contactus->getdetails();
        $data['details'] = $query->result();
        $this->load->view('Tempelate/template',$data);
        $this->load->view('contactus', $data, $error);


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

