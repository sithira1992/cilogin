<?php
/**
 * Created by PhpStorm.
 * User: Chathuranga Notebook
 * Date: 2/10/2015
 * Time: 1:29 AM
 */

class Con_Dmanager extends CI_Controller{


    function index(){

        /*$user = $this->session->userdata('user_id');

        $this->load->model('Mod_Dmanager');
        $process_data['value'] = $this->Mod_Dmanager->get_collaborators($user);*/

        $data['css'] = base_url('assets/css/dataManager_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('data_manager');
        $this->load->view('layout/footer');

    }

    function AddRevoke(){

        $data['css'] = base_url('assets/css/dataManager_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('Dman_Grant_Revoke');
        $this->load->view('layout/footer');
    }

     //function load_collaborators(){

        /* $user = $this->session->userdata('user_id');

         $this->load->model('Mod_Dmanager');
         $data_object = $this->Mod_Dmanager->get_collaborators($user);*/


         /*$user = $this->session->userdata('user_id');

         $this->load->model('Mod_Dmanager');
         $process_data['value'] = $this->Mod_Dmanager->get_collaborators($user);

         $data['css'] = base_url('assets/css/dataManager_page.css');
         $this->load->view('layout/header',$data);
         $this->load->view('data_manager',$process_data);
         $this->load->view('layout/footer');



     }*/


    function requestStatus(){

        $data['css'] = base_url('assets/css/request.css');
        $this->load->view('layout/header',$data);
        $this->load->view('DM_request');
        $this->load->view('layout/footer');
    }

} 