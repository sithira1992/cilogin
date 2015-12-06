<?php

class Con_product extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index($message = "")
    {

        $error['message'] = $message;
        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

        $this->load->view('product',$data ,$error);
    }


    function do_upload1()
    {

        if($this->input->post('upload')){

            $this->load->model('Mod_upload');
            echo pass;

            $this->Mod_upload_>doupload();


        }
        else
            echo pass;
    }


    function do_upload()
    {
        $config['upload_path'] = '../assets/images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100000';
        $config['max_width']  = '1600';
        $config['max_height']  = '1200';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('product', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());


            $name = $this->input->post('product_name');
            $description = $this->input->post('description');
            $type= $this->input->post('description');
            $var1="assets/images/";
            $path=$var1.$data['upload_data']['file_name'];

            echo $data['upload_data']['file_name'];
            $this->load->model('Mod_upload');
            $data_object = $this->Mod_upload->douplaod($name,$path,$path,$type,$description);
           // ($name,$path,$date ,$topic,$description,$type)

            $this->load->view('upsuc', $data);
        }



        $type = $this->input->post('product_name');
        $description = $this->input->post('description');
        $topic = $this->input->post('userfile');
        $patch = $this->input->post('password');


        //  $this->form_validation->set_rules('user_name', 'User name', 'required|trim');
        //  $this->form_validation->set_rules('password', 'Password', 'required|trim');



        //if ($this->form_validation->run()) {

    }




}