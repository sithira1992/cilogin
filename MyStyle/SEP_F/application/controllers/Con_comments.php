<?php

class Con_comments extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this ->load->model('Mod_items');
    }

    function index($message = "")
    {

        $topic="";
        $name="";

        $topic = $this->input->get("var1");
        $name = $_POST['name-com'];
        $email = $_POST['mail-com'];
        $comment = $_POST['comment'];//"This is Test Comment";


         $this->Mod_items->insertcomments($topic,$name,$email,$comment,"2");


        $query1 = $this->Mod_items->getcomments("Cap");
        $data['comments']= $query1->result();

        $this->load->view("Details_Page",$data);

    }
}
