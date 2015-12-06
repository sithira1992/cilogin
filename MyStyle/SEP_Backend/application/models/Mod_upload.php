<?php

class Mod_upload extends CI_Model{



    function Mod_upload(){


        $this->imagespath =realpath(' ../assets/images');

    }

    function douplaod($path,$date ,$topic,$description,$type,$subcat){


        $this->db->set('topic', $topic);
        $this->db->set('description', $description);
        $this->db->set('path', $path);
        $this->db->set('type', $type);
        $this->db->set('sub_cat',$subcat);

        if($this->db->insert('items'))
            return true;
        else
            return false;
    }

    function updateslides($maintitle,$subtitle,$path,$id){

        $data = array('mtitle' => $maintitle,
            'stitle' => $subtitle,
            'path'=>$path
        );

        $this->db->where('image_id', $id);
        $this->db->update('images', $data);
    }

    function setabout($about_us,$history,$chms_msg,$patch)
    {

        if ($about_us != NULL && $chms_msg != NULL && $history != NULL) {
            $data = array('about_us' => $about_us,
                'History' => $history,
                'Chmn_msg' => $chms_msg,
                'img_path'=>$patch);

            $this->db->where('id', "0");
            $this->db->update('about_us', $data);
        } else if ($about_us != NULL && $history != NULL) {
            $data = array('about_us' => $about_us,
                'History' => $history,
            );
            $this->db->where('id', "1");
            $this->db->update('about_us', $data);

        }
    }

    public function set_contact($Address,$Telephone,$Hot_line){

        if($Address != NULL && $Telephone !=NULL && $Hot_line!= NULL ) {
            $data = array('Address' => $Address,
                'Telephone' => $Telephone,
                'Hotline' => $Hot_line
            );

            $this->db->where('id', "1");
            $this->db->update('tbl_contact_details', $data);
        }


        else if($Address == NULL && $Telephone ==NULL && $Hot_line != NULL)
        {
            $data = array(
                'Hotline'=>$Hot_line

            );
            $this->db->where('id', "1");
            $this->db->update('tbl_contact_details', $data);

        }
        else if($Address == NULL && $Telephone !=NULL && $Hot_line != NULL)
        {
            $data = array( 'Telephone' => $Telephone,
                'Hotline'=>$Hot_line

            );
            $this->db->where('id', "1");
            $this->db->update('tbl_contact_details', $data);

        }
    }
    function updatecsr($name1,$path,$id){

        $data = array('name' => $name1,
            'path'=>$path
        );

        $this->db->where('id', $id);
        $this->db->update('csr_images', $data);
    }


}