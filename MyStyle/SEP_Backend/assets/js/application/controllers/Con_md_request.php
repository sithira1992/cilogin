<?php
/**
 * Created by PhpStorm.
 * User: Chathuranga Notebook
 * Date: 2/10/2015
 * Time: 10:38 PM
 */

class Con_md_request extends CI_Controller{

    function index(){

        $data['css'] = base_url('assets/css/request.css');
        $this->load->view('layout/header',$data);
        $this->load->view('DM_request');
        $this->load->view('layout/footer');
    }
}

