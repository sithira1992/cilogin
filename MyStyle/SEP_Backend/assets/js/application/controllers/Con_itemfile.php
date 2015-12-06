<?php

class Con_itemfile extends CI_Controller
{


    function index()
    {

        /*$user = $this->session->userdata('user_id');

        $this->load->model('Mod_Dmanager');
        $process_data['value'] = $this->Mod_Dmanager->get_collaborators($user);*/


        $this->load->helper('url');

        $this->load->model('Mod_images');
        $this->load->model('Mod_items');

        $data['images'] = $this->Mod_images->content();
        $data['items'] = $this->Mod_items->content();


        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;


        $this->load->view('header',$data);
        $this->load->view('Display_items',$data);
//$this->load->view('layout/footer');

    }
}


