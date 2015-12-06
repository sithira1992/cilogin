<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/10/2015
 * Time: 5:59 PM
 */class Con_stats extends CI_Controller
{

    function __construct()
    {
        parent::__construct();


       // $this->load->model('users/users_model');
      //  $this->load->model('users/users_service');
        $this->load->helper(array('form', 'url'));
//  $this->load->model('');
    }

    function index()
    {


        $this->load->model('stats_model');

        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;



        $query = $this->stats_model->content();
        $data['result'] = $query->result();

        $query = $this->stats_model->getCountry();
        $data['result1'] = $query->result();
       // $this->input->ip_address();
       $this->userStats();
        $this->load->view('Tempelate/template', $data);
        $this->load->view('stats',$data);

    }


    function  userStats()
    {

        //to get ip
        $ip=$this->input->ip_address();
        echo "lold".$ip;

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
        $ip='85.45.69.66';
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

        echo $city."  ppp";
        echo $country."  ppp";

        //end
        echo $agent;
        if ($this->is_bot($agent))
            $isbot = 1;
        else
            $isbot = 0;

        $this->load->helper('date');

       // $datestring = "Year: %Y Month: %m Day: %d - %h:%i %a";
      //  $time = time();

       // echo mdate($datestring, $time);

        $date = date("Y-m-d");
        $time = date("H:i:s");
        echo $date;
        echo $time;

        echo $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)
        $request_uri="stats";
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