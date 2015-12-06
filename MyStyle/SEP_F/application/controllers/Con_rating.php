<?php


class Con_rating extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index($message=""){

        $this->load->model('Mod_items');
        $this->load->model('Mod_images');
        $data['images'] = $this->Mod_images->content();
        $query = $this->Mod_items->content();
        $data['items'] = $query->result();



        $id = "";
        $rating = "";

        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        if (isset($_GET['rating'])) {
            $rating = $_GET['rating'];

        }

        $this->Mod_items->insertratings($id,$rating);

        $query3 =$this->Mod_items->getratings();
        $data['rate'] = $query3->result();

        echo $data;
       $this->load->view("home",$data);
       //$this->load->view("footer");


    }

}