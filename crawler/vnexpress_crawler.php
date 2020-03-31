<?php

    class vnexpress {
         public $curl;

         function __construct(Curl_data $curl) {
           $this->curl = $curl;
         }

         function get_title() {
       
          preg_match_all("/<a data-medium=\"Item[^>]*>(.*?)<\/a>/", $this->curl->get_data(), $title);
           return $title[1];

       }


       function get_link() {
        preg_match_all("/<a data-medium=\"Item[^>]* href=\"(.*?)\"[^>]*>(.*?)<\/a>/", $this->curl->get_data(), $link);
        return $link[1];
      }

      function get_date($data) {
        preg_match_all("/<span class=\"time left\">(.*?)<\/span>/", $data, $date);
        return $date[0][0];
       }


   function get_content($data) {
       preg_match_all("/<p class=\"Normal\">\n?(.*?)<\/p>/", $data, $content);
       return $content[0][0];
   }

   }
 