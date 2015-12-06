<?php

class Mod_comments extends CI_Model
{

    function getcomments($itemname)
    {
        $this->db->from('comments');
        $this->db->where('topic',$itemname);

        $result = $this->db->get();
        return $result;
    }

    function deletecom($itemid=null)
    {
        $query = $this->db->query("delete from comments  where id='{$itemid}'");

        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function insertcomment($topic,$name,$email,$comment){

        $this->db->set('topic', $topic);
        $this->db->set('name',$name);
        $this->db->set('email', $email);
        $this->db->set('comment',$comment);


        if($this->db->insert('comments'))
            return TRUE;
        else
            return FALSE;
    }
}