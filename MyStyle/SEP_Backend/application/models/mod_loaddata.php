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



    public function get_details($item_id = null)
    {
        $sql = "select * from items";

        if (isset($item_id)) {
            $sql .= " where item_id='{$item_id}'";
        }

        $query = $this->db->query($sql);
        return $query;
    }

    public function delete($item_id)   //delete item
    {
        $query = $this->db->query("delete from items where item_id='{$item_id}'");

        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function csr($id=NULL){

        $this->db->from('csr_images');
        if($id!=NULL){
            $this->db->where('id',$id);
        }
        $data = $this->db->get();

        return $data;
    }


    public function contentlist()
    {

        $sql = "select * from categories";
        $query = $this->db->query($sql);
        return $query;
    }


    public function subcontentlist() //Get subcategory list
    {

        $sql = "select * from sub_categories";
        $query = $this->db->query($sql);
        return $query;
    }


    public function get_detailscat()  // Get Items of the category
    {
        $sql = "select * from categories";


        $query = $this->db->query($sql);
        return $query;
    }




    public function deletecat($category_id) //Delete main category
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

    function Insert_cat($name,$description,$date){ //Insert Category


        $this->db->set('cat_name', $name);
        $this->db->set('Description', $description);
        $this->db->set('date',$date);


        if($this->db->insert('categories'))
            return TRUE;
        else
            return FALSE;
        //  $this->db->select('user_id,name,type');
        //$this->db->from('users');
        //$this->db->where('username',$username);
        //$this->db->where('password',$password);


    }


    public function deletecust($customer_id)
    {
        $query = $this->db->query("delete from customer where customer_id='{$customer_id}'");

        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


        public function getratings(){ //get ratings

        $result = $this->db->get('item_rating');
        return $result;

        }


    function insert_subcat($name,$cat,$description){ //Insert Sub Category


        $this->db->set('sub_cat_name', $name);
        $this->db->set('cat_name',$cat);
        $this->db->set('sub_cat_description', $description);


        $this->db->insert('sub_categories');



    }

    public function deletesubcat($sub_category_id) //delete subcategory
    {
        $query = $this->db->query("delete from sub_categories where sub_cat_id='{$sub_category_id}'");

        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function search($name,$cat){ //Search Items

        $this->db->from('items');

        if($name!=NULL && $cat!="Select Category") {
            $this->db->like('topic', $name);
            $this->db->like('type', $cat);
        }
        else if($name!=NULL &&  $cat =="Select Category")
        {
            $this->db->like('topic',$name);
        }
        else if($name==NULL && $cat!="Select Category")
        {
            $this->db->like('type',$cat);
        }

        $result =$this->db->get();
        return $result;

    }


    public function deleterating($item_id){

        $query = $this->db->query("delete from item_rating where item_id='{$item_id}'");
    }


    public function slides($id=NULL){

        $this->db->from('images');
        if($id!=NULL){
            $this->db->where('image_id',$id);
        }
        $result = $this->db->get();

        return $result;
    }

    public function mails(){

        $this->db->from('tbl_contact_us');
        $result = $this->db->get();

        return $result;
    }


}