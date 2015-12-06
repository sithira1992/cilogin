<?php
/**
 * Created by PhpStorm.
 * User: Chathuranga Notebook
 * Date: 2/11/2015
 * Time: 10:33 AM
 */


class Con_Prin_Investigator extends CI_Controller{


    function index(){

       /* $data['css'] = base_url('assets/css/admin_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('data_manager_delete');
        $this->load->view('layout/footer');*/

        $data['css'] = base_url('assets/css/PrincipalInvestor_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('principal_investigator');
        $this->load->view('layout/footer');

    }

    function PrinInvestigator_SubPages(){

        $button1 = $this->input->post('grant');
        $button2 = $this->input->post('request');
        $button3 = $this->input->post('change');

        if($button1 == "grantRevoke"){
            $this->loadAddDelete();
        }else if($button2 =="viewRequestStatus"){
            $this->viewRequestStatus();
        }
        else
        {
           // $this->changeManagerLevel();
            $this->accesslevel();
        }


    }


    function PrinInvestigator_SubPages2()
    {

        $button1 = $this->input->post('grant');
        $button2 = $this->input->post('revoke');

        if ($button1 == "grant") {
            $this->changeManagerLevel();
        } else if ($button2 == "revoke") {
         //   $this->changeManagerLevel();
        }

    }



        function loadAddDelete (){

        $data['css'] = base_url('assets/css/PrincipalInvestor_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('PriInv_Grant_Revoke');
        $this->load->view('layout/footer');
    }

    function viewRequestStatus(){

        $data['css'] = base_url('assets/css/PrincipalInvestor_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('PriInv_request');
        $this->load->view('layout/footer');

    }

    function accesslevel(){

        $this->load->model('PI_change_m');
        $data['userData'] = $this->PI_change_m-> getUsers();

        $data['js'] = base_url('assets/js/table_CRUD.js');
        $data['css'] = base_url('assets/css/PrincipalInvestor_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('priInv_change');
        $this->load->view('layout/footer');
    }




/*
    function changeManagerLevel(){

        $this->load->model('PI_change_m');
        $rt = $this->PI_change_m->Load_table();
        $data['css'] = base_url('assets/css/PrincipalInvestor_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('PriInv_change');
        $this->load->view('layout/footer');


    }
*/


}

