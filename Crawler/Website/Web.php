<?php

      class Web {
          public $curl;
          protected $regex_title;
          protected $regex_content;
          protected $regex_date;
          protected $regex_link;

          function __construct(Curl_data $curl) {
            $this->curl = $curl;
          }
 
          function get_title($regex_title) {
        
           preg_match_all($regex_title, $this->curl->get_data(), $title);
            return $title[1];
 
        }
 
 
        function get_link($regex_link) {
         preg_match_all($regex_link, $this->curl->get_data(), $link);
         return $link[1];
       }
 
       function get_date($regex_date, $data) {
         preg_match_all($regex_date, $data, $date);
         return $date[0][0];
        }
 
 
    function get_content($regex_content, $data) {
        preg_match_all($regex_content, $data, $content);
        return $content[0][0];
    }
 

      }