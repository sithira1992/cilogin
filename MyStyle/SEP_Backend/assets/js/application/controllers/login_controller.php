<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class login_controller extends CI_Controller {

function __construct() {
parent::__construct();


$this->load->model('users/users_model');
$this->load->model('users/users_service');

//  $this->load->model('');
}

function index() {

    $this->load->view('header');
    $this->load->view('login/login');

  //  $this->load->view('footer');

}



function authenticateuser()
{

    $users_model = new Users_model();

    $users_service = new Users_service();


    $users_model->setEmail($this->input->post('username', TRUE));
    $users_model->setPassword($this->input->post('password', TRUE));

    $users = $users_service->authenticateUser($users_model);
//echo $users;        die();
    if (count($users) == 1) {
        $userdata = array(

            'user_name' => $users->name,
            'user_id' => $users->id,
            'user_email' => $users->email,
            'logged_in' => TRUE
        );
//   session_start();
        $this->session->set_userdata($userdata);
        echo 1;
    } else {
        echo 0;
    }


}

//new one
//start



    //end

function logout() {
$this->session->unset_userdata('logged_in');
$this->session->unset_userdata('user_name');
$this->session->unset_userdata('user_id');
$this->session->unset_userdata('user_email');

    $this->load->helper('url');

    $this->load->model('Mod_images');
    $this->load->model('Mod_items');


    redirect('Con_index');
}

}

?>