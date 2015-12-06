<?php
/**
 * Created by PhpStorm.
 * User: meeya
 * Date: 21/2/2015
 * Time: 5:13 PM
 */

class Con_Admin extends CI_Controller
{

    public function assignValue($id="")
    {
        $comment = $this->input->post('comment_val');
        $this->AcceptRequest($comment,$id);
        $this->load->model('Mod_Admin');
        $rt = $this->Mod_Admin->Load_Requests();
        $data['css'] = base_url('assets/css/admin_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('admin',$rt);
        $this->load->view('layout/footer');

    }
    public function  rejectValue($id="")
    {
        $this->RejectRequest($id);
        $this->load->model('Mod_Admin');
        $rt = $this->Mod_Admin->Load_Requests();
        $data['css'] = base_url('assets/css/admin_page.css');
        $this->load->view('layout/header',$data);
        $this->load->view('admin',$rt);
        $this->load->view('layout/footer');
    }

    function index()
    {
        $val=$this->Mod_Admin->Load_Requests();
        return $val;
        //$this->load->view("admin",$val);//lets assume your view name admin

    }
    public function  AcceptRequest($comment,$id)
    {
        $this->load->model('Mod_Admin');
        $this->Mod_Admin->Accept_Size($comment,$id);
    }
    function  RejectRequest($id)
    {
        $this->load->model('Mod_Admin');
        $this->Mod_Admin->Reject_Size($id);
    }
} 