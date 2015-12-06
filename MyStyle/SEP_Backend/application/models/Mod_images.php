<?php

class Mod_images extends CI_Model{

function content()
{
    $this->db->from('images');
    $this->db->order_by('path');
    $result = $this->db->get();
    $return = array();
    if($result->num_rows() > 0) {
        foreach($result->result_array() as $row) {
            $return[$row['image_id']] = $row['path'];
        }
    }

    return $return;
}




}