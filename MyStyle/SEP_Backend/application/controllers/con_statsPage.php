<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/10/2015
 * Time: 5:59 PM
 */class Con_statsPage extends CI_Controller
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


        if(!$user_name)
            redirect('login_controller');

        $today = date("Y-m-d");

        $str = date("Y-m-d");
        $bb= (explode("-",$str));

        $day= $bb[0]."-".$bb[1]."-". --$bb[2];
        $thsmnth=$bb[0]."-".$bb[1];
        echo $thsmnth;

        //today visitors
        $query = $this->stats_model->getPageViwers($today);
        $data['result'] = $query->result();
        echo $today;

        //yesterday visiters
        $query = $this->stats_model->getPageViwers($day);
        $data['result1'] = $query->result();

        //this month visitors
        $query = $this->stats_model->getPageViwers2($thsmnth);
        $data['result2'] = $query->result();

        //all visitors
        $query = $this->stats_model->getPageViwers3();
        $data['result3'] = $query->result();

        //unique ip address

        $query = $this->stats_model->getPageViwers4();
        $data['result4'] = $query->result();

        //page details
        $query = $this->stats_model->getPage();
        $data['result5'] = $query->result();


        $this->load->view('Tempelate/template', $data);
        $this->load->view('charts/page_stats',$data);

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
        $request_uri="page stats";
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