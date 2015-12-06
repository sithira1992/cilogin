<?php
/**
 * Created by PhpStorm.
 * User: As
 * Date: 3/19/2015
 * Time: 1:55 PM
 */
class Con_signup extends CI_Controller
{

    function __construct() {
        parent::__construct();


        $this->load->model('users/users_model');
        $this->load->model('users/users_service');
        $this->load->helper(array('form', 'url'));
//  $this->load->model('');
    }

    function index()
    {

        $this->userStats();
        $this->load->model('Mod_navigation');

        /*$user = $this->session->userdata('user_id');

        $this->load->model('Mod_Dmanager');
        $process_data['value'] = $this->Mod_Dmanager->get_collaborators($user);*/

        $query1 = $this->Mod_navigation->getmaincategories(); //Managing retrieved main cat data
        $data['maincat'] = $query1->result();

        $query2 = $this->Mod_navigation->getsubcategories();//Managing retrieved sub categories
        $data['subcat'] = $query2->result();
        $data['css'] = base_url('assets/css/dataManager_page.css');
        $data['css'] = base_url('assets/css/dataManager_page.css');
        $this->load->view('header');
        $this->load->view('registrationform');
        //$this->load->view('layout/footer');

    }


    function insert()
    {

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $gender = $this->input->post('gender');
        $telephone = $this->input->post('phone');



            $this->load->model('Mod_signup');
            $data_object = $this->Mod_signup->login_Insert($name, $email,$password,$gender,$telephone);

        //new one
        //start
        $this->send_email($name,$email);

        $this->authenticateuser_registation($email,$password);

        //end
        $this->load->model('Mod_images');



    }

    // sithira new added
    //start
    function  send_email($name,$email)
    {

        $config = Array(
            'protocol'=>'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' =>465,
            'smtp_user' => 'sithira2012@gmail.com',
            'smtp_pass' => 'IT13052898v'

        );


        $this->load->library('email',$config);

        $this->email->set_newline("\r\n");

        $this->email->from('sithira2012@gmail.com','Dinal Fernado');
        $this->email->to($email);
        $this->email->subject("Registration email Test");

        $this->email->message("MR. ".$name." Thank you For Registration to our Web site");

        if($this->email->send())
        {
       //     echo "Your email  was sent ";


        }
        else{

            show_error($this->email->print_debugger());
        }
    }



    function authenticateuser_registation($email,$password) {
        $users_model = new Users_model();
        $users_service = new Users_service();

        $users_model->setEmail($this->input->post($email, TRUE));
        $users_model->setPassword($this->input->post($password, TRUE));

        $users = $users_service->authenticateUser($users_model);
//echo $users;        die();
        if (count($users) == 1) {
            $userdata = array(
                'user_name' => $users->name,
                'user_id' => $users->id,
                'user_email' => $users->email,
                'logged_in' => TRUE
            );
//   session_start();
            $this->session->set_userdata($userdata);
            $this->load->helper('url');

            $this->load->model('Mod_images');
            $this->load->model('Mod_items');

            $user_name = $this->session->userdata('user_name');
            $data['user_name']=$user_name;
            $data['images'] = $this->Mod_images->content();
            $data['items'] = $this->Mod_items->content();
            $data['topic'] = $this->Mod_items->gettopic();




            $this->load->view('header',$data);

           $this->load->view('home', $data);
            $this->load->view('footer');
            echo 1;
        } else {
            echo 0;
        }
    }




    function  userStats()
    {

        //to get ip
        $ip=$this->input->ip_address();
        //   echo "lold".$ip;

        //to get browser
        $this->load->library('user_agent');

        if ($this->agent->is_browser())
        {
            $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
            $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
            $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }

        //to get location
        $this->load->library('Ip2locationlite');
        $ipLite =new Ip2locationlite();
        //   $ipLite->some_function();
//start

        $ipLite->setKey('c51de224446fbd8c9a268c26538eaeb443cdf8068b0f22e384935cdcf471144f');

//Get errors and locations
        $ip='124.43.205.61';
        $locations = $ipLite->getCity($ip);
        $errors =$ipLite->getError();

//Getting the result
        $city="";
        $country="";
        if (!empty($locations) && is_array($locations)) {
            foreach ($locations as $field => $val) {
                if ($field == 'countryName')
                    $country = $val;
                if ($field == 'cityName')
                    $city = $val;
            }
        }



        //end
        //      echo $agent;
        if ($this->is_bot($agent))
            $isbot = 1;
        else
            $isbot = 0;

        $this->load->helper('date');



        $date = date("Y-m-d");
        $time = date("H:i:s");
        //    echo $date;
        //     echo $time;

        //     echo $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)
        $request_uri="Registration Page";
        $this->load->model('stats_model');
        $data_object = $this->stats_model->insertDetails($ip,$country,$city,$agent,$isbot,$request_uri,$date,$time);

    }


    function is_bot($agent){
        $botlist = array("Teoma", "alexa", "froogle", "Gigabot", "inktomi",
            "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory",
            "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot",
            "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp",
            "msnbot", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz",
            "Baiduspider", "Feedfetcher-Google", "TechnoratiSnoop", "Rankivabot",
            "Mediapartners-Google", "Sogou web spider", "WebAlta Crawler","TweetmemeBot",
            "Butterfly","Twitturls","Me.dium","Twiceler","Purebot","facebookexternalhit",
            "Yandex","CatchBot","W3C_Validator","Jigsaw","PostRank","Purebot","Twitterbot",
            "Voyager","zelist");

        foreach($botlist as $bot){
            if(strpos($agent,$bot)!==false)
                return true;	// Is a bot
        }
        return false;	// Not a bot
    }


}
