<?php

class Mod_upload extends CI_Model{



    function Mod_upload(){


        $this->imagespath =realpath(' ../assets/images');

    }







        function douplaod($name,$path,$date ,$topic,$description,$type){


            $this->db->set('topic', $name);
            $this->db->set('description', $description);
            $this->db->set('path', $path);
            $this->db->set('type', $type);

            // $this->db->where('patch',$path);

            $this->db->insert('items');
        }




}