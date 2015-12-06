<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 3/21/2015
 * Time: 11:02 AM
 */

class Proedit_con extends CI_Controller
{
  //  function __construct(){

    //

 //   }

    function index($message = "")
    {

        $error['message'] = $message;

            $this->load->model('mod_loaddata');

        $data['topics'] = $this->mod_loaddata->content();
        $query = $this->mod_loaddata->get_details();
        $data['result'] = $query->result();
        $this->load->view('Product/product_table', $data);
    }

    function delete($item_id){
        $this->load->model('mod_loaddata');
        if($this->mod_loaddata->delete($item_id)) {
            $data['succ_message'] = "item deleted";

            $this->load->model('mod_loaddata');

            $data['topics'] = $this->mod_loaddata->content();
            $query = $this->mod_loaddata->get_details();
            $data['result'] = $query->result();

            $this->load->view('Product/product_table', $data);

        }else
        {
                $data['error_message'] = "Item not deleted";
        }
    }

    function edit($item_id){


        $this->load->model('mod_loaddata');

        $query = $this->mod_loaddata->get_details($item_id);
        $data['result'] = $query->row();

        $query1 = $this->mod_loaddata->contentlist();
        $data['list'] = $query1->result();
        $this->load->view('Product/product_edit', $data);

    }

    function getdetails(){
        $this->load->model('mod_loaddata');
        $topic = $this->input->get('topic');
         echo $this->input->get('topic');

        $data['result'] = $this->mod_loaddata->get_details($topic);
         $this->mod_loaddata->get_details($topic);
        //$this->load->view('product_edit', $data);


     //   $data['topic'] = $dataobject['topic'];
     //    $data['description'] = $dataobject['description'];
     //    $data['path'] = $dataobject['path'];
     //   $data['type'] = $dataobject['type'];


      //  redirect('proedit_con',$data);







    }


    //deletecat
    function deletecat($category_id){
        $this->load->model('mod_loaddata');
        if($this->mod_loaddata->deletecat($category_id)) {
            $data['succ_message'] = "item deleted";

            $this->load->model('mod_loaddata');

            $data['topics'] = $this->mod_loaddata->content();
            $query = $this->mod_loaddata->get_detailscat();
            $data['result'] = $query->result();

            $this->load->view('Categories/category_table', $data);

        }else
        {
            $data['error_message'] = "Item not deleted";
        }
    }


    function update()
    {

        $config['upload_path'] = 'assets/images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100000';
        $config['max_width']  = '1600';
        $config['max_height']  = '1200';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
            echo 'lol';
            $this->load->view('product', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());


            $name = $this->input->post('product_name');
            $description = $this->input->post('description');
            $type = $this->input->post('select');
          //  $description = $this->input->post('description');

            $var1="../assets/images/";
            $patch=$var1.$data['upload_data']['file_name'];
            echo $patch;
            echo $data['upload_data']['file_name'];
            $this->load->model('Mod_upload');
            $data_object = $this->Mod_upload->douplaod($name,$patch,$type ,$type,$description,$type);
            $this->load->view('upsuc', $data);

        }


        $name = $this->input->post('product_name');
        $description = $this->input->post('description');
        $type = $this->input->post('select');
        $this->load->model('Mod_upload');
        $data_object = $this->Mod_upload->douplaod($name,$patch,$type ,$type,$description,$type);
        $this->load->view('upsuc', $data);




    }




}