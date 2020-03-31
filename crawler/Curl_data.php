<?php
    use Curl\Curl;
    class Curl_data {
        public $url;
        function __construct($url) {
            $this->url = $url;
        }

        
    function get_data() {
            $curl = new Curl();
            $curl->setOpt(CURLOPT_FOLLOWLOCATION, true);
            $html = $curl->get($this->url);
            return $html;  
     }

     function get_data_url($url) {
            $curl = new Curl();
            $curl->setOpt(CURLOPT_FOLLOWLOCATION, true);
            $html = $curl->get($url);
            return $html;  
    }
}