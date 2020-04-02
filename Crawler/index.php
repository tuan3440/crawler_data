<?php
      
     

   require_once "../config.php";
   require_once '../Curl/Curl.php';
   require_once '../Curl/MultiCurl.php';
   require_once '../Curl/CaseInsensitiveArray.php';
   require_once '../Curl/Url.php';
   require_once '../Curl/ArrayUtil.php';
   require_once '../Curl/Decoder.php';
   require_once '../Curl/Encoder.php';
   require_once '../Curl/StringUtil.php';
   require_once 'Database/Database.php';
   
   require_once 'Curl_data/Curl_data.php';
   require_once 'Website/Vnexpress_crawler.php';
   require_once 'Website/Dantri_crawler.php';
   require_once 'Website/Vietnamnet_crawler.php';
   

   if(isset($_GET['url'])){
      $url = $_GET['url'];
      $table = 'vietnamnet';
     
      $curl= new Curl_data($url);
      $vietnamnet = new Vietnamnet($curl);
      $database = new Database($table, $vietnamnet);
      $database->insert();
   }
      
     

      ?>

      <!DOCTYPE html>
      <html lang="en">
      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
      </head>
      <body>
      <h1>Nhập trang web cần lấy dữ liệu</h1>
      <form action="" method="get">
        <input type="text" name="url">
        <input type="submit" value="submit">
        </form>
      </body>
      </html>
     