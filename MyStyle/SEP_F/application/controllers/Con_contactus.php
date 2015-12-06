<?php

class Con_contactus extends CI_Controller{

    function index($message = "")
    {      $this->load->library('user_agent');

        if ($this->agent->is_browser()) {
            $agent = $this->agent->browser() . ' ' . $this->agent->version();
        } elseif ($this->agent->is_robot()) {
            $agent = $this->agent->robot();
        } elseif ($this->agent->is_mobile()) {
            $agent = $this->agent->mobile();
        } else {
            $agent = 'Unidentified User Agent';
        }

        echo $agent;

        echo $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)

        $this->load->library('geo');


        $this->geo->setKey('c51de224446fbd8c9a268c26538eaeb443cdf8068b0f22e384935cdcf471144f');

//Get errors and locations
        $ip='112.135.45.80';
        $locations = $this->geo->getCity($ip);
     //   $errors = $ipLite->getError();
        $city="lol";
        $country="s";
        if (!empty($locations) && is_array($locations)) {
            foreach ($locations as $field => $val) {
                if ($field == 'countryName')
                    $country = $val;
                if ($field == 'cityName')
                    $city = $val;
            }
        }
        echo $city;
        echo $country;


        $this->load->helper('url');
        $error['message'] = $message;
        $this->load->model('Mod_items');
        $this->load->model('Mod_navigation');
        $this->load->library('googlemaps');
        // This is our Google API key. You will need to change this for your own website
        $config['apikey'] = 'AIzaSyDcoKVY5iO_HuGHx5oe8K8C9XEKrNlOFPE';
        // Initialize our map, passing in any configuration values we have set
        $this->googlemaps->initialize($config);
        // Create the map. This will return the Javascript to be included in our pages <head> section and the HTML code to be
        // placed where we want the map to appear.

        $marker=array();
        // $marker['address'] = 'Kattuwa,negambo,Srilanka';
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();

        $query1 = $this->Mod_items->getcategories();
        $data['cat']= $query1->result();

        $this->load->model('Mod_contactus');

        $query2 =$this->Mod_contactus->getdetails();
        $data['contact']=$query2->result();

        $query1 = $this->Mod_navigation->getmaincategories(); //Managing retrieved main cat data
        $data['maincat'] = $query1->result();

        $query2 = $this->Mod_navigation->getsubcategories();//Managing retrieved sub categories
        $data['subcat'] = $query2->result();


        $this->load->view('header',$data);
        $this->load->view('Contact_us',$data, $error);
        $this->load->view('footer');
    }
    function insert()
    {
        $name=$this->input->post('name');
        $phone=$this->input->post('Contact_no');
        $email=$this->input->post('email');
        $product=$this->input->post('product');
        $category=$this->input->post('cat');
        $description=$this->input->post('description');
        $subject=$this->input->post('subject');


        $this->load->model('Mod_contact');
        $this->Mod_contact->setcontact($name,$phone,$email,$product,$category,$description,$subject);




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
        $this->email->subject("Contact email Test");

        $this->email->message("Information Regarding $product is Received For us");

        if($this->email->send())
        {
            echo "Your email  was sent ";
        }
        else{

            show_error($this->email->print_debugger());
        }



        $this->index();

    }
}