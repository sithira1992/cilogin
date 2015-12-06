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

        $this->load->model('mod_loaddata');
       // $user_name = $this->session->userdata('user_name');
        //$data['user_name']=$user_name;

        $query = $this->mod_loaddata->get_detailscust();
        $data['result'] = $query->result();


        //newly added start

        $this->load->model('users_model1');

        //Load the session library
        $this->load->library('session');

        // Redirect if not logged
     //   $sessionUserID = $this->session->userdata('user_id');
       // if(!$sessionUserID)
         //   redirect('login_controller');

        //Get all users
        //$this->outputData['listOfUsers']	= $this->users_model1->getUsers();

        $this->load->model('mod_loaddata');
        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

        $query = $this->mod_loaddata->get_detailscust();
        $data['result'] = $query->result();
        $userdata  = $this->session->all_userdata();
        //$this->outputData['session_dataa'] = $userdata;

        $query1 = $this->mod_loaddata->contentlist();
        $data['list'] = $query1->result();

        $query2 = $this->mod_loaddata->subcontentlist();
        $data['list2'] = $query2->result();


        $this->load->view('Tempelate/template', $data);
        $this->load->view('product',$data ,$error);
    }

    function insert()
    {
        $config['upload_path'] = '../SEP_F/assets/images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100000';
        $config['max_width']  = '1600';
        $config['max_height']  = '1200';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            echo "lol";
            $error = array('error' => $this->upload->display_errors());

            $user_name = $this->session->userdata('user_name');
            $data['user_name']=$user_name;
            $this->load->view('Tempelate/template',$error);
            $this->load->view('product', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());


            $type = $this->input->post('product_name');
            $description = $this->input->post('description');
            $cat=$this->input->post('select');
            $subcat = $this->input->post('select2');
            $var1="assets/images/";
            $patch=$var1.$data['upload_data']['file_name'];
            echo $patch;
            echo $data['upload_data']['file_name'];
            $this->load->model('Mod_upload');

            if($this->Mod_upload->douplaod($patch,$type,$type,$description,$cat,$subcat))
                $data['succ_message'] = "Product Inserted Sucesfully";
            $this->load->model('mod_loaddata');

            $user_name = $this->session->userdata('user_name');
            $data['user_name']=$user_name;

            $query1 = $this->mod_loaddata->contentlist();
            $data['list'] = $query1->result();

            $query2 = $this->mod_loaddata->subcontentlist();
            $data['subcat'] = $query2->result();

            $query2 = $this->mod_loaddata->subcontentlist();
            $data['list2'] = $query2->result();

            $this->load->view('Tempelate/template', $data);
            $this->load->view('product', $data);
        }
        $type = $this->input->post('product_name');
        $description = $this->input->post('description');
        $topic = $this->input->post('userfile');
        $patch = $this->input->post('password');


        //  $this->form_validation->set_rules('user_name', 'User name', 'required|trim');
        //  $this->form_validation->set_rules('password', 'Password', 'required|trim');



        //if ($this->form_validation->run()) {

    }

    function update() //Update Product Details
    {

        $name = $this->input->post('product_name');
        $description = $this->input->post('description');
        $type = $this->input->post('select');
        $description = $this->input->post('description');

        $var1="../assets/images/";
        // $patch=$var1.$data['upload_data']['file_name'];
        // echo $patch;
        //   echo $data['upload_data']['file_name'];
        $this->load->model('Mod_upload');
        $data_object = $this->Mod_upload->update($name,$type ,$type,$description,$type);
        $this->index();

    }

    function insert1()
    {

        $type = $this->input->post('product_name');
        $description = $this->input->post('description');
        $topic = $this->input->post('user_name');
        $patch = $this->input->post('password');
        $this->load->view('Tempelate/template');
        $this->load->model('Mod_upload');
        $data_object = $this->Mod_upload->douplaod($type,$type,$type ,$topic,$description,$type);

    }



}