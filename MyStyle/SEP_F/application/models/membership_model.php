<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/21/2015
 * Time: 1:41 PM
 */


     class Membership_model extends CI_Model {
         function validate_user() {
             $this->db->where('email', $this->input->post('username'));
             $this->db->where('password', md5($this->input->post('password')));

             $query = $this->db->get("users");

             if( $query->num_rows == 1 )  {
                 return true;
             }
         }

         function create_member()  {
             $new_member_insert_data = array(
                 'username' => $this->input->post("username"),
                 'password' => md5($this->input->post("password")),
                 'email'    => $this->input->post("email")
             );

             $insert = $this->db->insert("users", $new_member_insert_data);

             return true;
         }
     }

 ?>