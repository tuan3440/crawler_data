<?php
     class Database {

        
      
        

        function insert_db($table, $title, $content, $link, $date) {
            global $conn;
            $sql = "insert into $table(title, content, link, date) values('$title', '$content', '$link', '$date')";
            $conn->query($sql);
            
           
        }

}
