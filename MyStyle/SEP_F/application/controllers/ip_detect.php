<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/3/2015
 * Time: 11:34 PM
 */


if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Ip_detect extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index($message = "")
    {
        $this->load->library('user_agent');

        if ($this->agent->is_browser()) {
            $agent = $this->agent->browser() . ' ' . $this->agent->version();
        } elseif ($this->agent->is_robot()) {
            $agent = $this->agent->robot();
        } elseif ($this->agent->is_mobile()) {
            $agent = $this->agent->mobile();
        } else {
            $agent = 'Unidentified User Agent';
        }

        echo $agent;

        echo $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)

        $error['message'] = $message;
        $this->load->view('header');
        $this->load->view('contactus', $error);
        $this->load->view('footer');


    }



}