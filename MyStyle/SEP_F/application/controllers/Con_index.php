<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/18/2015
 * Time: 2:10 PM
 */

class Con_index extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index($message = "")
    {

        $this->load->helper('url');

        $this->userStats();
        $this->load->model('Mod_images');
        $this->load->model('Mod_items');
        $this->load->model('Mod_navigation');

        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;


        $query4 = $this->Mod_images->content();
        $data['images'] = $query4->result();

        $query = $this->Mod_items->latestcontent();
      //  $data['items'] = $query->result();

        $query1 = $this->Mod_navigation->getmaincategories(); //Managing retrieved main cat data
        $data['maincat'] = $query1->result();

        $query2 = $this->Mod_navigation->getsubcategories();//Managing retrieved sub categories
        $data['subcat'] = $query2->result();




        $error['message'] = $message;

        $query3 =$this->Mod_items->getratings();
        //$data['rate'] = $query3->result();


        foreach($query->result() as $row1){

            $sum=0;
            $count=0;
            $average=0;


            foreach($query3->result() as $row2)
            {

                if($row1->item_id == $row2->item_id){

                    $count = $count+1;

                    $sum = $sum + $row2->rating;

                }
            }
            if($count>0)
            $average = ceil($sum/$count);
            else
                $average=0;

            $data['details'][] = (object) array( 'topic'=>$row1->topic, 'path'=>$row1->path,'item_id'=>$row1->item_id,'ratings' =>$average);

     }

        $this->load->view('header',$data);
        $this->load->view('home', $data);
        $this->load->view('footer');
    }




    function  userStats()
    {

        //to get ip
        $ip=$this->input->ip_address();


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

        if ($this->is_bot($agent))
            $isbot = 1;
        else
            $isbot = 0;

        $this->load->helper('date');



        $date = date("Y-m-d");
        $time = date("H:i:s");

        $request_uri="Home";

        //call model class
     //   $this->load->model('stats_model');
       // $data_object = $this->stats_model->insertDetails($ip,$country,$city,$agent,$isbot,$request_uri,$date,$time);

    }




    //checking the ip address is bot or  not
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