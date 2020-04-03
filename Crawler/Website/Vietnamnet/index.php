<?php
      
     

   require_once "../../../config.php";
   require_once '../../../Curl/Curl.php';
   require_once '../../../Curl/MultiCurl.php';
   require_once '../../../Curl/CaseInsensitiveArray.php';
   require_once '../../../Curl/Url.php';
   require_once '../../../Curl/ArrayUtil.php';
   require_once '../../../Curl/Decoder.php';
   require_once '../../../Curl/Encoder.php';
   require_once '../../../Curl/StringUtil.php';
   
   require_once '../Website.php';
   require_once '../../Database/Database.php';
   require_once 'Vietnamnet.php';
   require_once 'Database_vietnamnet.php';
  
  
   
      $url = "https://vietnamnet.vn/vn/thoi-su/";
      
     
      $vietnamnet = new Vietnamnet($url);
      $database = new Database_vietnamnet($vietnamnet);
      $database->insert();
 
      
     

      ?>
