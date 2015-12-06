<?php


class Con_comment extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));

    }

    function getcomments()
    {

        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;
        $name = $this->input->get("var1");
        $this->load->model('Mod_comments');
        $query1=  $this->Mod_comments->getcomments($name);
        $data['comments'] =$query1->result();

        $this->load->view('Tempelate/template', $data);
        $this->load->view('comments', $data);


    }

    function deletecomment()
    {
        $this->load->model('Mod_comments');
        if($this->Mod_comments->deletecom()) {
            $data['succ_message'] = "comment deleted";

            $this->load->model('Mod_comments');
            $this->Mod_comments->deletecom($this->input->get("id"));

            $user_name = $this->session->userdata('user_name');
            $data['user_name'] = $user_name;

            $query1=  $this->Mod_comments->getcomments($this->input->get("name"));
            $data['comments'] =$query1->result();

            $this->load->view('Tempelate/template', $data);
            $this->load->view('comments', $data);

        }
        else
        {
            $data['error_message'] = "Comment not deleted";
        }

    }


    function addcomment(){

        $topic = $this->input->get("name");
        $name ="MyStyle";
        $email="MyStyle";
        $comment = $this->input->post('comment');


        $this->load->model('Mod_comments');
       if($this->Mod_comments->insertcomment($topic,$name,$email,$comment))
       {
           $data['succ_message'] = "Comment Posted Sucessfully";
       }

        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;

        $query1=  $this->Mod_comments->getcomments($this->input->get("name"));
        $data['comments'] =$query1->result();

        $this->load->view('Tempelate/template', $data);
        $this->load->view('comments', $data);


    }
}