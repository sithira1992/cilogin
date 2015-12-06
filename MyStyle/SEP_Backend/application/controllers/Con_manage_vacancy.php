<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 18/10/2015
 * Time: 9:42 AM
 */

class Con_manage_vacancy extends CI_Controller
{

    function index($message = "")
    {
        $error['message'] = $message;
        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;
        $this->load->model('Mod_manage_vacancy');
        $query=$this->Mod_manage_vacancy->FilterApplicants();//get the applicant details of the vacancies
        $data['vacancy_details'] = $query->result();

        $this->load->view('Tempelate/template', $data);//load the template
        $this->load->view('manage_vacancy',$data, $error);//load the view called manage_vacancy

    }

    public function FilterVacancy(){

        $Education=$this->input->post('education');
        $Applied_field=$this->input->post('applied_field');
        $Experience=$this->input->post('experience');
        $this->load->model('Mod_manage_vacancy');
        $vacancy_details=$this->Mod_manage_vacancy->FilterApplicants();//get the applicant details of the vacancies
        $data['vacancy_details']=array();
        foreach ($vacancy_details->result() as $row) {//get the applicant details of the selecting categories
            if ((($row->Applied_field==$Applied_field)&&($row->Education==$Education)&&($row->Experience==$Experience))||(($row->Applied_field==$Applied_field)&&($row->Experience==$Experience))||(($row->Education==$Education)&&($row->Applied_field==$Applied_field))||(($row->Applied_field==$Applied_field)&&($row->Experience==$Experience))||($row->Experience==$Experience)||($row->Applied_field==$Applied_field)||($row->Education==$Education)) {
                $data['vacancy_details'][]=(object)array('Id' => $row->Id, 'Name' => $row->Name, 'Age' => $row->Age, 'Gender' => $row->Gender, 'Phone' => $row->Phone,'Email'=>$row->Email,'Address'=>$row->Address,'Skill'=>$row->Skill,'Education'=>$row->Education,'Applied_field'=>$row->Applied_field, 'Experience' => $row->Experience,'CV'=>$row->CV);
                                }
        }
        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;
        $this->load->view('Tempelate/template',$data);//load the template
        $this->load->view('manage_vacancy',$data);//load the view called manage_vacancy

    }

    function AppicantDetails($id){

        $this->load->model('Mod_manage_vacancy');
        $query=$this->Mod_manage_vacancy->GetApplicantDetails($id);//get the applicant details of the selecting person
        $data['applicant_details'] = $query->result();
        $user_name = $this->session->userdata('user_name');
        $data['user_name'] = $user_name;
        $this->load->view('Tempelate/template', $data);//load the template
        $this->load->view('interview_call', $data);//load the view called interview_call
    }

    function InterviewCall($email){//set the email

        $message=$this->input->post('message');
        $subject=$this->input->post('subject');

        $config = Array(
            'protocol'=>'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' =>465,
            'smtp_user' => 'sajithsandaruwan2011@gmail.com',
            'smtp_pass' => '0711320205S'
        );

        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from('sajithsandaruwan2011@gmail.com','Test');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);

        if($this->email->send())
        {
            echo '<script>alert("You Have Successfully Send The Email!");</script>';
        }
        else{
            show_error($this->email->print_debugger());
        }
        $this->index();
    }

}