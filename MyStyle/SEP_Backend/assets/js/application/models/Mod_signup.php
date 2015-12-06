<?php
/**
 * Created by PhpStorm.
 * User: Chathuranga Notebook
 * Date: 2/7/2015
 * Time: 5:41 AM
 */

class Mod_signup extends CI_Model
{

    function login_Insert($name, $email,$password,$gender,$telephone){


        $this->db->set('name', $name);
        $this->db->set('email', $email);
        $this->db->set('password', md5($this->input->post("password")));
        $this->db->set('gender', $gender);
        $this->db->set('telephone',$telephone);

        $this->db->insert('users');
      //  $this->db->select('user_id,name,type');
        //$this->db->from('users');
        //$this->db->where('username',$username);
        //$this->db->where('password',$password);


       }



    public function edit($name, $email,$password,$gender,$telephone){



        $this->db->set('name', $name);
        $this->db->set('email', $email);
        $this->db->set('password', md5($this->input->post("password")));
        $this->db->set('gender', $gender);
        $this->db->set('telephone',$telephone);
        $this->db->where('email',$email);

        $this->db->update('users');
        //  $this->db->select('user_id,name,type');
        //$this->db->from('users');
        //$this->db->where('username',$username);
        //$this->db->where('password',$password);


    }





} 