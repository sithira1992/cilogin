<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/17/2015
 * Time: 4:56 PM
 */

class Con_Insert extends CI_Controller
{

    function index($message = "")
    {

        $error['message'] = $message;
        $data['css'] = base_url('assets/css/login_page.css');

        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;


        $this->load->view('header',$data);
        $this->load->view('layout/header', $data);
        $this->load->view('login1', $error);
        $this->load->view('layout/footer');
    }


    function insert()
    {

        $user_name = $this->input->post('user_name');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('user_name', 'User name', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');



        if ($this->form_validation->run()) {
            $this->load->model('Mod_Insert');
            $data_object = $this->Mod_Insert->login_Insert($user_name, $password);


        }

    }

}