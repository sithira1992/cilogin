<?php


class Con_csr_images extends CI_Controller
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

        $query1 = $this->mod_loaddata->csr($this->input->get("var1"));
        $data['data'] = $query1->result();

        $this->load->view('Tempelate/template', $data);
        $this->load->view('csrimg',$data);

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
        $name1 = $this->input->post('name');

        $var1="assets/images/";
        $path=$var1.$data['upload-img']['file_name'];
        // echo $path;
        echo $data['upload-img']['file_name'];
        $this->load->model('Mod_upload');
        $data_object = $this->Mod_upload->updatecsr($name1,$path,$id);
       $this->load->model('mod_loaddata');

        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;
        $this->index();

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

        $var1="assets/images/";$id=2;
        $path=$var1.$this->input->post('csr_photo');

        echo $data['upload_data']['file_name'];
        $name =$this->input->post('name');
        $this->load->model('Mod_upload');
        $data_object = $this->Mod_upload->updatecsr($name, $path,$id);
        $this->index();



    }




}