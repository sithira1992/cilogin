<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/18/2015
 * Time: 2:10 PM
 */

class Con_index extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index($message = "")
    {

        $this->load->helper('url');

        $this->load->model('Mod_images');
        $this->load->model('Mod_items');

        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;
        $data['images'] = $this->Mod_images->content();
        $data['items'] = $this->Mod_items->content();
        $data['topic'] = $this->Mod_items->gettopic();


        $error['message'] = $message;

       $this->load->view('header',$data);

        $this->load->view('home', $data);
      $this->load->view('footer');
    }
}