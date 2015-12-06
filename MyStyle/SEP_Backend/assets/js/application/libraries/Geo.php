<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Geo{

    protected $errors = array();
    protected $service = 'api.ipinfodb.com';
    protected $version = 'v3';
    protected $apiKey = 'c51de224446fbd8c9a268c26538eaeb443cdf8068b0f22e384935cdcf471144f';

    public function __construct(){}

    public function __destruct(){}

    public function setKey($key){
        if(!empty($key)) $this->apiKey = $key;
    }

    public function getError(){
        return implode("\n", $this->errors);
    }

    public function getCountry($host){
        return $this->getResult($host, 'ip-country');
    }

    public function getCity($host){
        return $this->getResult($host, 'ip-city');
    }

    private function getResult($host, $name){
        $ip = @gethostbyname($host);

        if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)){
            $xml = @file_get_contents('http://' . $this->service . '/' . $this->version . '/' . $name . '/?key=' . $this->apiKey . '&ip=' . $ip . '&format=xml');


            if (get_magic_quotes_runtime()){
                $xml = stripslashes($xml);
            }

            try{
                $response = @new SimpleXMLElement($xml);

                foreach($response as $field=>$value){
                    $result[(string)$field] = (string)$value;
                }

                return $result;
            }
            catch(Exception $e){
                $this->errors[] = $e->getMessage();
                return;
            }
        }

        $this->errors[] = '"' . $host . '" is not a valid IP address or hostname.';
        return;
    }
}


/* End of file geo_location_pi.php */
/* Location: ./system/plugins/geo_location_pi.php */
