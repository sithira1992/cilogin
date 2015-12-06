<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 15/10/2015
 * Time: 9:15 AM
 */
class Con_vacancies extends CI_Controller
{
    function index()
    {
        $this->load->model('Mod_vacancy');
        $this->load->model('Mod_items');
        $this->load->model('Mod_navigation');

        $query1 = $this->Mod_navigation->getmaincategories(); //Managing retrieved main cat data
        $data['maincat'] = $query1->result();

        $query2 = $this->Mod_navigation->getsubcategories();//Managing retrieved sub categories
        $data['subcat'] = $query2->result();

        $vacancy=$this->Mod_vacancy->getvacancies();//getting the vacancy advertisement details
        $data['vacancy']=array();

        foreach ($vacancy->result() as $row) {
            if ($row->Exp_date>date('Y-m-d')) {//get the advertisements that aren't overdue
                $data['vacancy'][]=(object)array('Id' => $row->Id, 'Pub_date' => $row->Pub_date, 'Exp_date' => $row->Exp_date, 'Add' => $row->Add, 'Title' => $row->Title);
                        }
        }

        $this->load->view('header',$data);
        $this->load->view('Vavancies',$data);
        $this->load->view('footer');
    }
        function insert()
        {
            $name = $this->input->post('name');
            $age = $this->input->post('age');
            $gender = $this->input->post('gender');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $address = $this->input->post('address');
            $applied_field = $this->input->post('applied_field');
            $education = $this->input->post('education');
            $skill = $this->input->post('skill');
            $experience = $this->input->post('experience');//
            $config['upload_path'] = '../SEP_Backend/assets/images';
            $config['allowed_types'] = 'pdf';
            $config['max_size']	= '100000';
            $config['max_width']  = '1600';
            $config['max_height']  = '1200';


            $this->load->library('upload', $config);

            $data = array('upload_data' => $this->upload->data());

            $var1="assets/images/";
            $path=$var1.$this->input->post('cv');
            // echo $path;
            echo $data['upload_data']['file_name'];//

            $this->load->model('Mod_vacancy');
            $this->Mod_vacancy->setdetails($name, $age, $gender, $phone, $email, $address, $applied_field, $education, $skill, $experience,$path);

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'sajithsandaruwan2011@gmail.com',
                'smtp_pass' => '0711320205S'
            );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('sajithsandaruwan2011@gmail.com', 'Test');
            $this->email->to($email);
            $this->email->subject("Apply for the vacancy");
            $this->email->message("Information Regarding You is Received For us");

              if($this->email->send())
            {
              echo '<script>alert("You Have Successfully Applied for the job!");</script>';
            }
            else{
              show_error($this->email->print_debugger());
            }
              $this->index();
            }

}