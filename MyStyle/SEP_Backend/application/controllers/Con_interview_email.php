<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 22/10/2015
 * Time: 10:10 AM
 */
class Con_interview_email extends CI_Controller
{

    function index($message = "")
    {
        $error['message'] = $message;
        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;


        $this->load->view('Tempelate/template', $data);
        $this->load->view('interview_email', $data, $error);

    }

}