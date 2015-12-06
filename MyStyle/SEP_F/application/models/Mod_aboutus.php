<?php

class Mod_aboutus extends CI_Model
{

    function getdetails()
    {
        $sql ="select * from about_us";

        $query = $this->db->query($sql);
        return $query;



    }
}