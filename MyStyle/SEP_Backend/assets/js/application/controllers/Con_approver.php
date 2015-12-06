<?php
/**
 * Created by PhpStorm.
 * User: Chathuranga Notebook
 * Date: 2/22/2015
 * Time: 12:35 AM
 */

class Con_approver extends CI_Controller{

    function index(){

        $this->load->model('Mod_approver');
        $data['userData'] = $this->Mod_approver-> getStorageReq();

        $data['css'] = base_url('assets/css/approver_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('approver');
        $this->load->view('layout/footer');

    }
    function app_storage_req(){

        $Button1 = $this->input->post('Accept');
        $Button2 = $this->input->post('Reject');

        $this->load->model('Mod_approver');

        if($Button1 == "Accept"){

            $this->Mod_approver->updateStatus($Button1);
        }else{
            $this->Mod_approver->updateStatus($Button2);
        }
        $this->index();


    }


} 