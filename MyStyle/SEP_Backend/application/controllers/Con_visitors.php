<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/10/2015
 * Time: 10:01 PM
 */


class Con_visitors extends CI_Controller
{

    function index($message = "")
    {




        $this->load->model('stats_model');



        $query = $this->stats_model->countBrowsers();
        $data['result'] = $query->result();
        // $this->input->ip_address();

        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

     $this->load->view('Tempelate/template', $data);

        $this->load->view('charts/r',$data);
    }




}