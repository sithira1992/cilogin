<?php
/**
 * Created by PhpStorm.
 * User: Irushika
 * Date: 2/23/2015
 * Time: 9:19 PM
 */

class PI_change_c extends CI_Controller
{
    function index(){

        $this->load->model('PI_change_m');
        $data['userData'] = $this->PI_change_m-> getUsers();
        $data['css'] = base_url('assets/css/PrincipalInvestor_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('priInv_change');
        $this->load->view('layout/footer');

}


    public function assignmanager($id="")
    {
        $this->grantmanager($id);
        $this->load->model('PI_change_m');
        $data['userData'] =$this->PI_change_m->getUsers();
        $data['css'] = base_url('assets/css/PrincipalInvestor_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('priInv_change',$data['userData']);
        $this->load->view('layout/footer');

    }
    public function  assignuser($id="")
    {
        $this->revokemanager($id);
        $this->load->model('PI_change_m');
        $data['userData'] =$this->PI_change_m->getUsers();
        $data['css'] = base_url('assets/css/PrincipalInvestor_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('priInv_change',$data['userData']);
        $this->load->view('layout/footer');
    }



    public function  grantmanager($id)
    {
        $this->load->model('PI_change_m');
        $this->PI_change_m->grant($id);
    }
    function  revokemanager($id)
    {
        $this->load->model('PI_change_m');
        $this->PI_change_m->revoke($id);
    }



}