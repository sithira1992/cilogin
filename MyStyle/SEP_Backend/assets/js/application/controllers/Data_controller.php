<?php



class Data_controller extends CI_Controller
{

    function index($message = "")
    {

        $this->load->helper('url');

        $this->load->model('Mod_images');
        $this->load->model('Mod_items');

        $data['images'] = $this->Mod_images->content();
        $data['items'] = $this->Mod_items->content();
        $data['topics'] = $this->Mod_items->gettopic();
        $error['message'] = $message;




        $this->load->view('header');
        $this->load->view('Display_Items',$data);
         $this->load->view('footer');
    }
}