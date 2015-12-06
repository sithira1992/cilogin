<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 3/21/2015
 * Time: 11:02 AM
 */

class Proedit_con extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index($message = "")
    {

        $error['message'] = $message;

        $error['message'] = $message;

        $this->load->model('mod_loaddata');
        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

        $query = $this->mod_loaddata->get_detailscust();
        $data['result'] = $query->result();


        //newly added start

        $this->load->model('users_model1');

        //Load the session library
        $this->load->library('session');

        // Redirect if not logged
        $sessionUserID = $this->session->userdata('user_id');
        if(!$sessionUserID)
            redirect('login_controller');

        //Get all users
       // $this->outputData['listOfUsers']	= $this->users_model1->getUsers();

        $this->load->model('mod_loaddata');
        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

        $query = $this->mod_loaddata->get_detailscust();
        $data['result'] = $query->result();
        $userdata  = $this->session->all_userdata();
        $this->outputData['session_dataa'] = $userdata;

        $data['topics'] = $this->mod_loaddata->content();
        $query = $this->mod_loaddata->get_details();
        $data['result'] = $query->result();


        $query1 = $this->mod_loaddata->contentlist();
        $data['content'] = $query1->result();


        $this->load->view('Tempelate/template', $data);
        $this->load->view('Product/product_table', $data);
    }

    function delete($item_id){              //Delete Product

        $this->load->model('mod_loaddata');
        if($this->mod_loaddata->delete($this->input->get("var1"))) {
            $this->load->model('Mod_comments');
            $this->Mod_comments->deletecom($this->input->get("var2"));
            $this->mod_loaddata->deleterating($this->input->get("var1"));


            $data['succ_message'] = "item deleted";

                $this->load->model('mod_loaddata');

            $data['topics'] = $this->mod_loaddata->content();
            $query = $this->mod_loaddata->get_details($item_id);
            $data['result'] = $query->result();

            $this->load->view('Tempelate/template', $data);
            $this->load->view('Product/product_table', $data);

        }else
        {
            $data['error_message'] = "Item not deleted";
        }
    }

    function edit($item_id){   //Getting current information of product


        $this->load->model('mod_loaddata');

        $query = $this->mod_loaddata->get_details($item_id);
        $data['result'] = $query->row();

        $query1 = $this->mod_loaddata->contentlist();
        $data['list'] = $query1->result();

        $this->load->view('Tempelate/template', $data);
        $this->load->view('Product/product_edit', $data);

    }

    function getdetails(){
        $this->load->model('mod_loaddata');
        $topic = $this->input->get('topic');
        echo $this->input->get('topic');

        $data['result'] = $this->mod_loaddata->get_details($topic);
        $this->mod_loaddata->get_details($topic);

    }



    function deletecat($category_id){    //Delete Main category

        $this->load->model('mod_loaddata');

        $subcat = $this->mod_loaddata->subcontentlist();
        $count=0;

        foreach($subcat->result() as $row){
            if($row->cat_id == $category_id)
            {
                $count=$count+1;
            }

        }
        if($count==0) {

            if ($this->mod_loaddata->deletecat($category_id)) {
                $data['succ_message'] = "Category deleted";

                $this->load->model('mod_loaddata');


                $user_name = $this->session->userdata('user_name');
                $data['user_name'] = $user_name;
                $this->load->model('mod_loaddata');

                $data['topics'] = $this->mod_loaddata->content();
                $query = $this->mod_loaddata->get_detailscat();
                $data['result'] = $query->result();
                $this->load->view('Tempelate/template', $data);
                $this->load->view('Categories/category_table', $data);

            }

            else {
                $data['error_message'] = "Category is Deleted";
            }

        }
        else
        {
            $data['error_message'] = "Category Not Deleted.Remove Items Under Category in order to delete Category";

            $user_name = $this->session->userdata('user_name');
            $data['user_name'] = $user_name;
            $this->load->model('mod_loaddata');

            $data['topics'] = $this->mod_loaddata->content();
            $query = $this->mod_loaddata->get_detailscat();
            $data['result'] = $query->result();

            $this->load->view('Tempelate/template', $data);
            $this->load->view('Categories/category_table', $data);
        }

    }


    function update() //Update Product Details
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
            $this->load->view('Tempelate/template', $error);
            $this->load->view('Product/product_table', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());


            $name = $this->input->post('product_name');
            $description = $this->input->post('description');
            $type = $this->input->post('select');
            $description = $this->input->post('description');

            $var1="../assets/images/";
            $patch=$var1.$data['upload_data']['file_name'];
            echo $patch;
            echo $data['upload_data']['file_name'];
            $this->load->model('Mod_upload');
            $data_object = $this->Mod_upload->update($name,$patch,$type ,$type,$description,$type);
            $this->load->view('Tempelate/template', $data);
            $this->load->view('upsuc', $data);

        }


        $name = $this->input->post('product_name');
        $description = $this->input->post('description');
        $type = $this->input->post('select');
        $this->load->model('Mod_upload');
        $data_object = $this->Mod_upload->douplaod($name,$patch,$type ,$type,$description,$type);
        $this->load->view('upsuc', $data);


    }

    public function search(){   //Search Products

        $this->load->model('mod_loaddata');
        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

        $query = $this->mod_loaddata->get_detailscust();
        $data['result'] = $query->result();


        //newly added start

        $this->load->model('users_model1');

        //Load the session library
        $this->load->library('session');

        // Redirect if not logged
        $sessionUserID = $this->session->userdata('user_id');
        if(!$sessionUserID)
            redirect('login_controller');

        //Get all users
        $this->outputData['listOfUsers']	= $this->users_model1->getUsers();

        $this->load->model('mod_loaddata');
        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

        $query = $this->mod_loaddata->get_detailscust();
        $data['result'] = $query->result();
        $userdata  = $this->session->all_userdata();
        $this->outputData['session_dataa'] = $userdata;

        $name="";
        $category="Select Category";

        $name = $this->input->post('search');
        $category = $this->input->post('select');

        $this->load->model('mod_loaddata');

        $data['topics'] = $this->mod_loaddata->content();
        $query = $this->mod_loaddata->search($name,$category);
        $data['result'] = $query->result();


        $query1 = $this->mod_loaddata->contentlist();
        $data['content'] = $query1->result();

        $this->load->view('Tempelate/template', $data);
        $this->load->view('Product/product_table', $data);

    }



}