<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 18/10/2015
 * Time: 11:21 AM
 */
class Mod_manage_vacancy extends CI_Model
{
    public function FilterApplicants(){

        $sql = "select * from tbl_vacancy ";
        $query = $this->db->query($sql);
        return $query;

    }

    public function GetApplicantDetails($id){

        $sql ="select * from tbl_vacancy where Id='{$id}'";
        $query = $this->db->query($sql);
        return $query;
    }


}