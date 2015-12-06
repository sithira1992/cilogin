<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 3/20/2015
 * Time: 7:37 PM
 */
class Mod_contactus extends CI_Model
{

    function getdetails()
    {
        $sql ="select * from tbl_contact_details";

        $query = $this->db->query($sql);
        return $query;

    }

    function getcategories()
    {
        $sql ="select * from categories";

        $query = $this->db->query($sql);
        return $query;



    }
}