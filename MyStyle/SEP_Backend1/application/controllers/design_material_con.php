<?php
/**
 * Created by PhpStorm.
 * User: Chathuranga Notebook
 * Date: 3/11/2015
 * Time: 3:53 PM
 */

class design_material_con extends CI_Controller{

    function index(){

        $this->load->view('Template/template');
        $this->load->model('design_material_mod');
        $data['canvas_background'] = $this->design_material_mod->get_canvas_background();
        $data['canvas_designs'] = $this->design_material_mod->get_graphics();

        $this->load->view('layout/Dashboard_header_with_menu');
        $this->load->view('backend/design_material',$data);
        $this->load->view('layout/Dashboard_footer');
    }

    function graphic_event_handler(){

        $deleteButton= $this->input->post('trash_btn');
        $saveButton= $this->input->post('save_btn');
        $id = $this->input->post('index0');

        $fakeFilePath = $this->input->post('file_url');
        $fileName = explode('\\',$fakeFilePath);
        $directory = "uploads/design_uploads";

        $data = array(
            'name' => $this->input->post('index1'),
            'file_url' => $directory."/".$fileName[2],
        );

        if($saveButton=="save"){
            if($id==null){
                $this->upload();
                //$this->add_design($data);
            }else{
                $this->update_bg_images($id,$data);
            }
        }else if($deleteButton=="delete"){

            $this->delete_bg_images($id);
        }


    }

    function add_design($data){

        $this->load->view('Template/template');
        $this->load->model('design_material_mod');
        $result = $this->design_material_mod-> add_design($data);

    }

    function upload(){

        $config['upload_path'] = './uploads/design_uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size']	= '1000';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('imgFile'))
        {
            $data = array('error' => $this->upload->display_errors());
            //$this->load_requested_orders($error);
            $this->upload_testing($data);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
           // $this->load_requested_orders($data);
            $this->upload_testing($data);
        }

    }

    function canvas_bg_img_event_handler(){

        $deleteButton= $this->input->post('trash_btn');
        $saveButton= $this->input->post('save_btn');
        $id = $this->input->post('index0');

        $data = array(
            'name' => $this->input->post('index1'),
            'gender' => $this->input->post('index2'),
            'side' => $this->input->post('index3'),
            'color' => $this->input->post('index4'),
            'image_url' => $this->input->post('index5')
        );

        if($saveButton=="save"){
            if($id==null){
               $this->add_bg_images($data);
            }else{
                $this->update_bg_images($id,$data);
            }
        }else if($deleteButton=="delete"){

            $this->delete_bg_images($id);
        }

    }

    function upload_testing($data = ""){

        $this->load->view('testing',$data);
    }

    function update_bg_images($id,$data){

        $this->load->view('Template/template');
        $this->load->model('design_material_mod');
        $result = $this->design_material_mod->update_canvas_background($id,$data);

        $this->index();
    }

    function delete_bg_images($id){

        $this->load->view('Template/template');
        $this->load->model('design_material_mod');
        $result = $this->design_material_mod->delete_canvas_background($id);

        $this->index();
    }

    function add_bg_images($data){

        $this->load->view('Template/template');
        $this->load->model('design_material_mod');
        $result = $this->design_material_mod-> add_canvas_background($data);

        $this->index();
    }


} 