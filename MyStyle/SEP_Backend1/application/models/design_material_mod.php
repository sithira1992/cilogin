<?php
/**
 * Created by PhpStorm.
 * User: Chathuranga Notebook
 * Date: 3/11/2015
 * Time: 3:55 PM
 */

class design_material_mod extends CI_Model{

    function get_graphics(){

        $result = $this->db->get('graphics');

        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return null;
        }
    }

    function add_design($data){

        $result = $this->db->insert('graphics', $data);

        if($result==true){
            return true;
        }else{
            return false;
        }
    }

    function get_canvas_background(){

        $result = $this->db->get('canvas_background');

        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return null;
        }
    }

    function update_canvas_background($id,$data){

        $result = $this->db->update('canvas_background',$data,"bg_img_id = $id");

        if($result==true){
            return true;
        }else{
            return false;
        }

    }

    function delete_canvas_background($id){

        $result = $this->db->delete('canvas_background',"bg_img_id = $id");

        if($result==true){
            return true;
        }else{
            return false;
        }
    }

    function add_canvas_background($data){

        $result = $this->db->insert('canvas_background', $data);

        if($result==true){
            return true;
        }else{
            return false;
        }
    }
}