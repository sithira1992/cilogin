<?php

class mod_loaddata extends CI_Model
{

    function content()
    {

        $this->db->from('items');
        $this->db->order_by('item_id');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {

                $return[$row['item_id']] = $row['type'];
            }
        }
        return $return;

    }

    //"Con_details?var1=<?php echo $topics[1]


    public function get_details($item_id = null)
    {
        $sql = "select * from items";

        if (isset($item_id)) {
            $sql .= " where item_id='{$item_id}'";
        }

        $query = $this->db->query($sql);
        return $query;
    }

    public function delete($item_id)
    {
        $query = $this->db->query("delete from items where item_id='{$item_id}'");

        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


    public function contentlist()
    {

        $sql = "select * from categories";
        $query = $this->db->query($sql);
        return $query;
    }


    public function get_detailscat()  // Get Items of the category
    {
        $sql = "select * from categories";


        $query = $this->db->query($sql);
        return $query;
    }

    public function deletecat($category_id)
    {
        $query = $this->db->query("delete from categories where category_id='{$category_id}'");

        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


    public function get_detailscust()  // Get Items of the category
    {
        $sql = "select * from customer";


        $query = $this->db->query($sql);
        return $query;
    }




}