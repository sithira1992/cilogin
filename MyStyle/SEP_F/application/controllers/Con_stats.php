<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/10/2015
 * Time: 5:59 PM
 */class Con_stats extends CI_Controller
{

    function __construct()
    {
        parent::__construct();


       // $this->load->model('users/users_model');
      //  $this->load->model('users/users_service');
        $this->load->helper(array('form', 'url'));
//  $this->load->model('');
    }

    function index()
    {


        $this->load->model('stats_model');




        $query = $this->stats_model->content();
        $data['result'] = $query->result();
        $this->load->view('stats',$data);

    }

}