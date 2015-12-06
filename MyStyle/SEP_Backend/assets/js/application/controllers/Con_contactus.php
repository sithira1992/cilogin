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


      //  $geo_data = $this->geo->get_geolocation($ip);

   // echo "Country code : ".$geo_data['country_name']."\n";
    //echo "Country name : ".$geo_data['city']."\n";

        $error['message'] = $message;
        $this->load->view('header');
        $this->load->view('contactus', $error);
        $this->load->view('footer');
    }
}