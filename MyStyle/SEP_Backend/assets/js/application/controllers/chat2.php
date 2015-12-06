<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/8/2015
 * Time: 10:30 AM
 */

class Chat2 extends CI_Controller {

    //Global variable
    public $outputData;		//Holds the output data for each view
    public $loggedInUser;

    public function index()
    {

        //Load the users model
      //  $this->load->model('users_model');

        //Load the session library
      //  $this->load->library('session');

        // Redirect if not logged
        $sessionUserID = $this->session->userdata('user_id');
      //  if(!$sessionUserID)
     //       redirect('welcome');

        //Get all users
     //   $this->outputData['listOfUsers']	= $this->users_model->getUsers();

        $this->load->view('chat/chat',$this->outputData);
    }


}