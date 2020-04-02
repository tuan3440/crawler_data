<?php

    class Dantri {
         public $curl;

         function __construct(Curl_data $curl) {
           $this->curl = $curl;
         }

         function get_title() {
       
          preg_match_all("/<h2><a[^>]*>(.*?)<\/a><\/h2>/", $this->curl->get_data(), $title);
           return $title[1];

       }


       function get_link() {
        preg_match_all("/<h2><a[^>]*href=\"(.*?)\"[^>]*>(.*?)<\/a><\/h2>/", $this->curl->get_data(), $link);
        return $link[1];
      }

      function get_date($data) {
        preg_match_all(" /<span class=\"fr fon7 mr2 tt-capitalize\">(\n|\r)?\s+(.*?)(\n|\r)?\s+<\/span>/", $data, $date);
        return $date[0][0];
       }


   function get_content($data) {
       preg_match_all("/<div id=\"divNewsContent\" class=\"fon34 mt3 mr2 fon43 detail-content\">(.*?)<div id=\"div_tamlongnhanai\"><\/div>/s", $data, $content);
       return $content[0][0];
   }

   }
 