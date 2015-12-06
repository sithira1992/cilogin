<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 16/10/2015
 * Time: 1:40 PM
 */

class Con_vacancy_add extends CI_Controller
{

    function index($message = "")
    {
        $error['message'] = $message;
        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;
        $this->load->model('Mod_vacancy_add');
        $this->load->view('Tempelate/template', $data);//load the template
        $this->load->view('vacancy_add', $error);//load the view called vacancy_add
    }

    /**
     * insert a vacancy
     */
    function insert()
    {

        $config['upload_path'] = '../SEP_F/assets/images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100000';
        $config['max_width']  = '1600';
        $config['max_height']  = '1200';


        $this->load->library('upload', $config);

        $data = array('upload_data' => $this->upload->data());

        $var1="assets/images/";
        $path=$var1.$this->input->post('vacancy_image');//set the path
        echo $data['upload_data']['file_name'];

        $pub_date=date('Y-m-d');
        $exp_date =$this->input->post('exp_date');//set the expire date
        $e_date = date('Y-m-d', strtotime(str_replace('-', '/', $exp_date)));

        $title = $this->input->post('title');//set the title

        $this->load->model('Mod_vacancy_add');
        $this->Mod_vacancy_add->setvacancy($path,$pub_date,$e_date,$title );
        $this->index();



    }

}