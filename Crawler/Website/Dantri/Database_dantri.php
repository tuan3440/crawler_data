
<?php

class Database_dantri extends Database {
  
    protected $table = 'dantri';
    protected $object;
    function __construct(Dantri $object) {
           
            $this->object = $object;
          }


        function insert() {
         

        $title = $this->object->get_title();
        
        $link = $this->object->get_link();
        
        foreach(array_combine($title, $link) as $title => $link) {
            global $url;
            $suburl = $url.$link;
           
            $subdantri = new Dantri($suburl);
            
            $subdatabase = new Database_dantri($subdantri);
            
            $content = $subdatabase->object->get_content();
            
            $date = $subdatabase->object->get_date();
        
            $this->insert_db($this->table, $title, $content, $suburl, $date);
            
        }
        echo "lưu dữ liệu thành công";
        }
 }