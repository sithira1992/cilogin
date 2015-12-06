<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class login_controller extends CI_Controller {

function __construct() {
parent::__construct();


$this->load->model('users/users_model');
$this->load->model('users/users_service');

//  $this->load->model('');
}


    function index($message = "")
    {

        $this->load->helper('url');


        $this->load->model('Mod_images');
        $this->load->model('Mod_items');
        $this->load->model('Mod_navigation');

        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

        $data['images'] = $this->Mod_images->content();
        $query = $this->Mod_items->latestcontent();
        //  $data['items'] = $query->result();

        $query1 = $this->Mod_navigation->getmaincategories(); //Managing retrieved main cat data
        $data['maincat'] = $query1->result();

        $query2 = $this->Mod_navigation->getsubcategories();//Managing retrieved sub categories
        $data['subcat'] = $query2->result();




        $error['message'] = $message;

        $query3 =$this->Mod_items->getratings();
        //$data['rate'] = $query3->result();


        foreach($query->result() as $row1){

            $sum=0;
            $count=0;
            $average=0;


            foreach($query3->result() as $row2){

                if($row1->item_id == $row2->item_id){

                    $count = $count+1;

                    $sum = $sum + $row2->rating;

                }



            }
            if($count>0)
                $average = ceil($sum/$count);
            else
                $average=0;

            $data['details'][] = (object) array( 'topic'=>$row1->topic, 'path'=>$row1->path,'item_id'=>$row1->item_id,'ratings' =>$average);

        }








        $this->load->view('header',$data);
        $this->load->view('login/login');
        //$this->load->view('footer');
    }


function authenticateuser()
{

    $users_model = new Users_model();

    $users_service = new Users_service();


    $users_model->setEmail($this->input->post('username', TRUE));
    $users_model->setPassword($this->input->post('password', TRUE));

    $users = $users_service->authenticateUser($users_model);



    //newly added sithira


    $this->load->library('session');

    //Load Models - for this function
    $this->load->model('users_model1');

    $this->load->model('auth_model');

    //Load Form Helper
    $this->load->helper('form');

    $loggedInUser = $this->users_model1->getLoggedInUser();
    $this->outputData['loggedInUser'] 	= $loggedInUser;



    {



        $conditions =  array('user_email'=>$this->input->post('username'),'user_password' => $this->input->post('password'),'ci_users.status' => '1');

        $query	= $this->users_model1->getUsers($conditions);

        if($query->num_rows() > 0)
        {

            $row =  $query->row();

            // update the last activity in the users table
            $updateData = array();
            //date("Y-m-d H:i:s")
            $updateData['online'] = "1";

            // update process for users table
            $this->users_model1->updateUser(array('user_id'=>$row->user_id),$updateData);


            //Set Session For User
            $this->auth_model->setUserSession($row);
            $this->session->userdata('user_id', $row->user_id);
            $this->session->userdata('user_name', $row->user_name);

            //Notification message
            //   $this->session->set_flashdata('flash_message', $this->users_model->flash_message('success','Logged In Successfull'));
            //   redirect('Con_dashBord');


        }
        else {

            //Notification message
            //  $this->session->set_flashdata('flash_message', $this->users_model->flash_message('error','Login failed! Incorrect username or password  '.$this->input->post('username').""));
            //   redirect('users');
        } //If username exists

        //}//If End - Check For Validation
    }




    //end

//echo $users;        die();
    if (count($users) == 1) {
        $userdata = array(

            'user_name' => $users->name,
            'user_id' => $users->id,
            'user_email' => $users->email,
            'logged_in' => TRUE
        );
//   session_start();
        $this->session->set_userdata($userdata);
        echo 1;
    } else {
        echo 0;
    }


}

//new one
//start



    //end

function logout() {
$this->session->unset_userdata('logged_in');
$this->session->unset_userdata('user_name');
$this->session->unset_userdata('user_id');
$this->session->unset_userdata('user_email');

    $this->load->helper('url');

    $this->load->model('Mod_images');
    $this->load->model('Mod_items');
    session_unset();

// destroy the session
    session_destroy();

    redirect('Con_index');
}

}

?>