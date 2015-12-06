<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 09/05/2015
 * Time: 8:23 AM
 */
class Mod_contact extends CI_Model{

    function setcontact($name,$phone,$email,$product,$category,$description,$subject){


        $this->db->set('Name', $name);
        $this->db->set('Email',$email);
        $this->db->set('Phone',$phone);
        $this->db->set('product',$product);
        $this->db->set('category',$category);
        $this->db->set('description',$description);
        $this->db->set('subject', $subject);


        $this->db->insert('tbl_contact_us');
    }

}