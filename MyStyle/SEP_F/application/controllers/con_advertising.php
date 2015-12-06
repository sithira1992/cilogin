<?php



class con_advertising extends CI_Controller
{

    function index($message = "")
    {

        $this->load->helper('url');

        $this->load->model('Mod_images');
        $this->load->model('Mod_items');

        $data['images'] = $this->Mod_images->content();


        $query1=$this->Mod_items->contenttype('Advertising');
        $data['items'] = $query1->result();
        //  $data['topics'] = $this->Mod_items->gettopic();
        $error['message'] = $message;

        $data['title'] = "Advertising Products";




        $this->load->view('header');
        $this->load->view('Display_Items',$data);
        $this->load->view('footer');
    }

}