<?php

class Database {

    private $table;
    private $object;
   
   //  function __construct($table,vietnamnet $object) {
   //      $this->table = $table;
   //      $this->object = $object;
   //  }



   

   function insert_db($table, $title, $content, $link, $date) {
      
       global $conn;
      
       $sql = "insert into $table(title, content, link, date) values('$title', '$content', '$link', '$date')";
       $conn->query($sql);
       
      
   }


}