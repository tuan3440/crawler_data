<?php

    class vietnamnet {
         public $curl;

         function __construct(Curl_data $curl) {
           $this->curl = $curl;
         }

         function get_title() {
       
          preg_match_all("/<h3><a[^>]*>(.*?)<\/a><\/h3>/", $this->curl->get_data(), $title);
           return $title[1];

       }


       function get_link() {
        preg_match_all("/<h3><a href=\"(.*?)\"[^>]*>(.*?)<\/a><\/h3>/", $this->curl->get_data(), $link);
        return $link[1];
      }

      function get_date($data) {
        preg_match_all("/<p class=\"time-zone\">(.*?)+(\n|\r)?\s+<\/p>/", $data, $date);
        return $date[0][0];
       }


   function get_content($data) {
       preg_match_all("/<div id=\"ArticleContent\" class=\"ArticleContent\">(.*?)<div class=\"inner-article\">/", $data, $content);
       return $content[0][0];
   }

   }
 