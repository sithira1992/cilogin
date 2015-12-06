<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/22/2015
 * Time: 11:09 AM
 */

class Con_register_update extends CI_Controller
{

    function index($message = "")
    {

        $user_name = $this->session->userdata('user_name');

        $email = $this->session->userdata('user_email');
        $contact = $this->session->userdata('user_contact');
        $data['user_name']=$user_name;
        $data['user_email']=$email;
        $data['user_contact']=$contact;
        $this->load->view('header',$data);
        $this->load->view('update_register', $data);
       // $this->load->view('footer');
        //    $this->load->view('layout/footer');
    }




    function edit()
    {

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $gender = $this->input->post('gender');
        $telephone = $this->input->post('phone');

        //    $this->form_validation->set_rules('user_name', 'User name', 'required|trim');
        //    $this->form_validation->set_rules('password', 'Password', 'required|trim');



        //   if ($this->form_validation->run()) {
        $this->load->model('Mod_signup');
        $data_object = $this->Mod_signup->edit($name, $email,$password,$gender,$telephone);



        $this->load->model('Mod_images');


        $data['images'] = $this->Mod_images->content();
        $this->load->helper('url');



        redirect(base_url('Con_index'));

    }



}