<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 15/10/2015
 * Time: 9:32 AM
 */
class Mod_vacancy extends CI_Model{

    function setdetails($name,$age,$gender,$phone,$email,$address,$applied_field,$education,$skill,$experience,$path){

        $this->db->set('Name', $name);
        $this->db->set('Age',$age);
        $this->db->set('Gender',$gender);
        $this->db->set('Phone',$phone);
        $this->db->set('Email',$email);
        $this->db->set('Address',$address);
        $this->db->set('Applied_field',$applied_field);
        $this->db->set('Education',$education);
        $this->db->set('Skill',$skill);
        $this->db->set('Experience',$experience);
        $this->db->set('CV',$path);

        $this->db->insert('tbl_vacancy');
    }


    function getvacancies()
    {
        $sql ="select * from tbl_vacancy_details ";
        $query = $this->db->query($sql);
        return $query;

    }
}