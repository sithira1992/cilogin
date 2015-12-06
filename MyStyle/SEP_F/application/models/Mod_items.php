<?php


class Mod_items extends CI_Model
{
    function content($type = null)
    {

        $this->db->from('items');

        $sql = "select * from items  order by date DESC ";

        if (isset($type)) {
            $sql .= " where type='$type'";
        }


        $query = $this->db->query($sql);
        return $query;
    }

    function latestcontent($type = null)  //Get Latest Content
    {

        $this->db->from('items');
        $this->db->order_by("date","desc");
        $this->db->limit(8);
        $query = $this->db->get();
        return $query;
    }

    function contenttype($type = null) ///get type details
    {

        $this->db->from('items');

        $sql = "select * from items ";

        if (isset($type)) {
            $sql .= " where sub_cat='$type'";
        }

        $query = $this->db->query($sql);
        return $query;
    }


    function contentdetail($topic) ///get content for more details
    {

        $this->db->from('items');

        $sql = "select * from items where topic='$topic'";

        if (isset($type)) {
            $sql .= " where topic='$topic'";
        }

        $query = $this->db->query($sql);
        return $query;
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

    function getratings()   //Get Rating details
    {
        $this->db->from('item_rating');

        $sql = "select * from item_rating ";

        $query = $this->db->query($sql);
        return $query;
    }

    function insertratings($id,$name){  //Insert rating details

        $this->db->set('item_id', $id);
        $this->db->set('rating', $name);



        $this->db->insert('item_rating');
    }

    function searchitem($topic)  //Search items
    {

        $this->db->from('items');
        $this->db->like('topic',$topic);
        $query = $this->db->get();
        return $query;
    }


    function getcomments($id){

        $sql = "Select * from comments";

        if (isset($id)) {
            $sql .= " where topic='$id'";
        }

        $query = $this->db->query($sql);
        return $query;
    }

    function insertcomments($topic,$name,$email,$comment,$postid){

        //  $sql ="insert into comments(topic,name,email,post,id_post) values($topic,$name,$email,$comment,$postid)";

        $this->db->set('topic', $topic);
        $this->db->set('name', $name);
        $this->db->set('email', $email);
        $this->db->set('comment', $comment);
        $this->db->set('id_post', $postid);

        $this->db->insert('comments');

    }
}



