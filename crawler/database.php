<?php
     class database {

         private $table;
         private $object;
        
         function __construct($table,vietnamnet $object) {
             $this->table = $table;
             $this->object = $object;
         }




        function insert_db($title, $content, $link, $date) {
            global $conn;
            $sql = "insert into $this->table(title, content, link, date) values('$title', '$content', '$link', '$date')";
            $conn->query($sql);
            
           
        }

  function insert() {
   
    
    $title = $this->object->get_title();
    $link = $this->object->get_link();
  
    foreach(array_combine($title, $link) as $title => $link){
        global $url;
         $suburl = $url.$link;
       
         $html = $this->object->curl->get_data_url($suburl);
         
         $content = $this->object->get_content($html);
   
         $date = $this->object->get_date($html);
    
         $this->insert_db($title, $content, $suburl, $date);
         echo "lưu dữ liệu thành công";
    }

}
}
