<?php

class Mod_navigation extends CI_Model
{

       function getmaincategories(){   //Getting the names of main categories

            $this->db->from('categories');

            $sql = "Select cat_name From Categories ";

            $query= $this->db->query($sql);

            return $query;
        }


    function getsubcategories(){  // Getting the sub category information

        $this->db->from('categories');

        $sql = "Select * From sub_categories ";

        $query= $this->db->query($sql);

        return $query;

    }


    function getimages(){  // Getting the sub category information

        $this->db->from('csr_images');

        $sql = "Select * From csr_images ";

        $query= $this->db->query($sql);

        return $query;

    }
}