<?php

     use Curl\Curl;
    class Website {
         public $html;
         protected $regex_title;
         protected $regex_content;
         protected $regex_date;
         protected $regex_link;

         function __construct($url) {
            $curl = new Curl();
            $curl->setOpt(CURLOPT_FOLLOWLOCATION, true);
            $this->html = $curl->get($url);
         }

         

         function get_title() {
        
            preg_match_all($this->regex_title, $this->html, $title);
             return $title[1];
  
         }
  
  
         function get_link() {
          preg_match_all($this->regex_link, $this->html, $link);
          return $link[1];
        }
  
        function get_date() {
          preg_match_all($this->regex_date, $this->html, $date);
          $str = "";
          foreach($date[0] as $date)
          $str = $str.$date;
          return $str;
        }
  
  
     function get_content() {
         preg_match_all($this->regex_content, $this->html, $content);
         $str = "";
         foreach($content[0] as $content)
         $str = $str.$content;
         
        
         return $str;
     
     }
  
 
       }