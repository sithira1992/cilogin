<?php


class Email extends CI_Controller
{

    function  _construct()
    {
        parent::Controller();
    }


    function  index()
    {

        $config = Array(
          'protocol'=>'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' =>465,
            'smtp_user' => 'sithira2012@gmail.com',
            'smtp_pass' => ''

        );


        $this->load->library('email',$config);

        $this->email->set_newline("\r\n");

        $this->email->from('sithira2012@gmail.com','lol');
        $this->email->to('chandimalperera7890@gmail.com');
        $this->email->subject("Registration email Test");

        $this->email->message("Thank you For egistatio");

        if($this->email->send())
        {
            echo "Your email  was sent ";
        }
        else{

            show_error($this->email->print_debugger());
        }
    }
}