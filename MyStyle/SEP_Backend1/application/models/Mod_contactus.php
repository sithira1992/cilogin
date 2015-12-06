<?php
class Mod_contactus extends CI_Model{


function setcontact1($address, $tel,$email,$fax,$hotline){


    $this->db->set('Address',$address);
    $this->db->set('phone_no', $tel);
    $this->db->set('email',$email);
    $this->db->set('fax',$fax);
    $this->db->set('hotline',$hotline);

    $this->db->insert('contactus');
}

    function getdetails()
    {
        $sql ="select * from tbl_contact_details";

        $query = $this->db->query($sql);
        return $query;



    }


}
?>
