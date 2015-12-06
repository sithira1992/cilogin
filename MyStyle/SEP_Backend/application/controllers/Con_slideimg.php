<?php


class Con_slideimg extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index($message = "")
    {
        $this->load->model('mod_loaddata');
        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;

        $query1 = $this->mod_loaddata->slides($this->input->get("var1"));
        $data['data'] = $query1->result();

        $this->load->view('Tempelate/template', $data);
        $this->load->view('slideimg',$data);

    }
    function insertimg()
    {
        $config['upload_path'] = '../SEP_F/assets/images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100000';
        $config['max_width']  = '1600';
        $config['max_height']  = '1200';

        $this->load->library('upload', $config);
        $id = $this->input->get("var1");
        $data = array('upload_data' => $this->upload->data());
        $maintitle = $this->input->post('maintitle');
        $subtitle=$this->input->post('subtitle');

        $var1="assets/images/";
        $path=$var1.$data['upload_data']['file_name'];
       // echo $path;
        echo $data['upload_data']['file_name'];
        $this->load->model('Mod_upload');
        $data_object = $this->Mod_upload->updateslides($maintitle,$subtitle,$path,$id);
        $this->load->model('mod_loaddata');

        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;
        $this->index();

    }



}