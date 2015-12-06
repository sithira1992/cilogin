<?php


class Mod_items extends CI_Model
{

    function content()
    {

        $this->db->from('items');
        $this->db->order_by('item_id desc');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {

                $return[$row['item_id']] = $row['path'];
            }
        }
        return $return;

    }


    //   return $return;


    function gettopic()
    {
        $this->db->from('items');
        $this->db->order_by('item_id desc');
        $result = $this->db->get();
        $return = array();

        $no = $result->num_rows();
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {
                $return[$row['item_id']] = $row['topic'];
            }
        }
        return $return;
    }



  function getdescription($name){


      $this->db->from('items');
      //$this->db->order_by('item_id desc');
     $this->db->where('topic',$name);
      $result = $this->db->get();
      $return = array();


      if ($result->num_rows() > 0) {
          foreach ($result->result_array() as $row) {
              $return[$row['item_id']] = $row['description'];
          }
      }
      return $return;


  }

    function contentim($name)
    {

        $this->db->from('items');
        $this->db->where('topic',$name);

        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {

                $return[$row['item_id']] = $row['path'];
            }
        }
        return $return;

    }







}



