<?php
/**
 * Created by PhpStorm.
 * User: Chathuranga Notebook
 * Date: 2/6/2015
 * Time: 10:44 PM
 */

class Con_login extends CI_Controller{

    function index($message = ""){

        $error['message'] = $message;
        $data['css'] = base_url('assets/css/login_page.css');
        $this->load->view('layout/header',$data);
       $this->load->view('login',$error);
        $this->load->view('layout/footer');
    }

    function login(){

        $user_name = $this->input->post('user_name');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('user_name','User name','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');

        if($this->form_validation->run()) {
            $this->load->model('Mod_login');
            $data_object = $this->Mod_login->login_check($user_name, $password);


            if (!empty($data_object['user_id'])) {

                $userData = array(
                    'user_id' => $data_object['user_id'],
                    'name' => $data_object['name'],
                    'type' => $data_object['type']
                );

                $this->session->set_userdata($userData);

                switch($data_object['type']){
                    case('ADM'):

                        $this->load->model('Mod_Admin');
                        $rt = $this->Mod_Admin->Load_Requests();
                        $data['css'] = base_url('assets/css/admin_page.css');
                        $this->load->view('layout/header1',$data);
                        $this->load->view('index1',$rt);
                      //  $this->load->view('layout/footer');
                        break;
                    case('DMA'):
                        $this->data_manager();
                        break;
                    case('PIN'):
                        $data['css'] = base_url('assets/css/PrincipalInvestor_page.css');
                        $this->load->view('layout/header',$data);
                        $this->load->view('principal_investigator');
                        $this->load->view('layout/footer');
                        break;
                    case('APP'):
                        $this->appover();
                        break;
                }
            }else{
                $message = "* Incorrect username or password";
                $this->index($message);
            }
        }else{
            $message = "* Please enter Both Username and Password";
            $this->index($message);
        }
    }


    function data_manager(){

        $this->load->model('Mod_Dmanager');

        $data['css'] = base_url('assets/css/dataManager_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('data_manager');
        $this->load->view('layout/footer');
    }

    function appover(){

        $this->load->model('Mod_approver');
        $data['userData'] = $this->Mod_approver-> getStorageReq();

        $data['js'] = base_url('assets/js/table_CRUD.js');
        $data['css'] = base_url('assets/css/approver_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('approver');
        $this->load->view('layout/footer');
    }

    function logOut(){

        $this->session->sess_destroy();
        $data['css'] = base_url('assets/css/login_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('login');
        $this->load->view('layout/footer');
    }


}

