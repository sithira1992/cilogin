<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class login_controller extends CI_Controller {

    //Global variable
    public $outputData;		//Holds the output data for each view
    public $loggedInUser;


    function __construct() {
        parent::__construct();


        $this->load->model('users/users_model');
        $this->load->model('users/users_service');
        $this->load->model('users_model');

    }

    function index() {

       // $this->load->view('Tempelate/template');
        $this->load->view('login/login');


        parent::__construct();

        /*Load the session liberary
        *
        */
        $this->load->library('session');

        /*
         *
         Load Models - for this function
        */



        $this->load->model('auth_model');
        /*
        *  $this->load->view('footer');
         *
         *
        */
    }


/*
 * login authentication
 *
 */
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

    // $loggedInUser = $this->users_model1->getLoggedInUser();
    //    $this->outputData['loggedInUser'] = $loggedInUser;

        {

            //end

//echo $users;        die();
            if (count($users) == 1) {
                $userdata = array(

                    'user_name' => $users->name,
                    'user_id' => $users->id,
                    'user_email' => $users->email,
                    'logged_in' => TRUE

                );

                        $name=$users->name;
                        $id=$users->id;
                $users = $users_service->update_users($users->id,1);
//   session_start();


                $this->session->set_userdata($userdata);
                $this->chat_login($name,$id);
                echo 1;
            } else {
                echo 0;
            }


        }
    }
//new one
//start


/*
 * online admin chat authentication
 */
    public function chat_login($name,$id)
    {


    //Load the session liberary
    $this->load->library('session');

    //Load Models - for this function
    $this->load->model('Mod_chat');

    $this->load->model('Mod_chat_auth');

    //Load Form Helper
    $this->load->helper('form');

    $loggedInUser = $this->Mod_chat->getLoggedInUser();
    $this->outputData['loggedInUser'] 	= $loggedInUser;


    {


        $conditions =  array('user_name'=>"Admin",'user_password' => "aaa",'ci_users.status' => '1');

        $query	= $this->Mod_chat->getUsers($conditions);

        //if($query->num_rows() > 0)
        {

            $row =  $query->row();

            // update the last activity in the users table
            $updateData = array();
            //date("Y-m-d H:i:s")
            $updateData['online'] = "1";

            // update process for users table
            $this->Mod_chat->updateUser(array('user_id'=>$id),$updateData);


            //Set Session For User
            $this->auth_model->setUserSession($row);
            $this->session->userdata('user_id', $id);
            $this->session->userdata('user_name', $name);

            //Notification message
          //  $this->session->set_flashdata('flash_message', $this->users_model->flash_message('success','Logged In Successfull'));
            //redirect('chat');


        }
        //else
        {

            //Notification message
          //  $this->session->set_flashdata('flash_message', $this->users_model->flash_message('error','Login failed! Incorrect username or password  '.$this->input->post('username').""));
        //    redirect('users');
        } //If username exists

        //}//If End - Check For Validation
    }

    //$this->load->view('users/users',$this->outputData);


}


    //end

    function logout() {

        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('cookie');
        //Load Models - for this function
        $this->load->model('users_model1');
      $this->load->model('auth_model');
      // $this->load->model('users_service');

        /*
         * update admin online status
         */

        $auth = new auth_model();
        $users = $auth->update_users( $this->session->userdata('user_id'),0);

        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_email');

        $this->load->helper('url');

		//Load Models - for this function
        $this->load->view('Tempelate/template');
		  $this->load->model('Mod_chat');

        $this->load->model('Mod_chat_auth');

        // update the last activity in the users table
		$updateData = array();
		$updateData['online'] = "0";
	    // update process for users table
		$this->Mod_chat->updateUser(array('user_id'=>$this->session->userdata('user_id')),$updateData);
        $this->Mod_chat_auth->clearUserSession();
        $this->Mod_chat_auth->clearUserCookie(array('username','password'));

        redirect('login_controller');
    }

}

?>