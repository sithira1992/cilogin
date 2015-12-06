<?php

class Con_about_us extends CI_Controller
{

    function index($message = "")
    {

        $error['message'] = $message;
        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;
        $this->load->model('Mod_aboutus');

        $query = $this->Mod_aboutus->getdetails();
        $data['details'] = $query->result();
        $this->load->view('Tempelate/template', $data);
        $this->load->view('aboutus', $data, $error);


    }

    function insert()
    {

        $config['upload_path'] = '../SEP_F/assets/images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100000';
        $config['max_width']  = '1600';
        $config['max_height']  = '1200';


        $this->load->library('upload', $config);

        $data = array('upload_data' => $this->upload->data());

        $var1="assets/images/";
        $path=$var1.$this->input->post('chmn_photo');
        // echo $path;
        echo $data['upload_data']['file_name'];


        $about_us =$this->input->post('about_us');
        $history = $this->input->post('history');
        $chms_msg =$this->input->post('chms_msg');



        $this->load->model('Mod_upload');
        $data_object = $this->Mod_upload->setabout($about_us, $history, $chms_msg,$path);
        $this->index();



    }

}