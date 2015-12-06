<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/21/2015
 * Time: 1:37 PM
 */

class lol extends CI_Controller {




    function index() {   // function of loading login page
        $data['main_content'] = "login_form";   // name of login page

        $this->load->view("lol", $data);
    }

    function validate() {   // form validation
        $this->load->model("membership_model");    // load "membership_model"
        $query = $this->membership_model->validate_user();   // check validation

        if( $query )  {     // if data found
            $data = array(  // value which is to be inserted into session
                "username" => $this->input->post("username"),
                "is_logged_in" => true
            );

            $this->session->set_userdata($data);  // insert value into session
            redirect("site/members_area");   // go to predefined page
        }
        else {
            // if data not found then go to login_form page
            $this->index();
        }
    }

    // create account
    function sign_up() {
        $data['main_content'] = "sign_up";

      //  $this->load->view("includes/templet", $data);
    }

    // insert data into database
    function create_member()  {

        $this->load->library("form_validation");  // load form_validation library

        $this->form_validation->set_rules("username", "Username", "trim|required");
        $this->form_validation->set_rules("password", "Enter Password", "trim|required|min_length[4]|max_length[32]");
        $this->form_validation->set_rules("re_password", "Confirm password", "trim|required|matches[password]");

        $this->form_validation->set_rules("email", "Email Address", "trim|required|valid_email");

        if(  $this->form_validation->run() == FALSE )  {
            $this->load->view("sign_up");
        }
        else {
            $this->load->model("membership_model");

            if( $query =  $this->membership_model->create_member() )  {
                // redirect("site/members_area");
                $data['main_content'] = "signup_success";

                //->load->view("includes/templet", $data);
            }
            else {
                $this->load->view("sign_up");
            }
        }
    }
}



