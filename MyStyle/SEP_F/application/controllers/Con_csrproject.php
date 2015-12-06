<?php


class Con_csrproject extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {


        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;
        $this->load->model('Mod_navigation');

        //Managing retrieved csr images
        $query1 = $this->Mod_navigation->getimages();
        $data['images'] = $query1->result();
        $query1 = $this->Mod_navigation->getmaincategories(); //Managing retrieved main cat data
        $data['maincat'] = $query1->result();

        $query2 = $this->Mod_navigation->getsubcategories();//Managing retrieved sub categories
        $data['subcat'] = $query2->result();

       $data['css'] = base_url('assets/css/dataManager_page.css');
       $this->userStats();
        $this->load->view('header',$data);
        $this->load->view('CSR_Projects',$data);
        $this->load->view('footer');

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

        //  echo $city."  ppp";
        //    echo $country."  ppp";

        //end
        //      echo $agent;
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
        //    echo $date;
        //     echo $time;

        //     echo $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)
        $request_uri="CSR Projects";
        $this->load->model('stats_model');
     //   $data_object = $this->stats_model->insertDetails($ip,$country,$city,$agent,$isbot,$request_uri,$date,$time);

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