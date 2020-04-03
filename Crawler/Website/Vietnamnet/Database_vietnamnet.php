<?php

class Database_vietnamnet extends Database {
    protected $table = 'vietnamnet';
    protected $object;
    function __construct(Vietnamnet $object) {
           
            $this->object = $object;
          }


        function insert() {
         

        $title = $this->object->get_title();
        
        $link = $this->object->get_link();
        
        foreach(array_combine($title, $link) as $title => $link) {
            global $url;
            $suburl = $url.$link;
           
            $subvietnamnet = new Vietnamnet($suburl);
            
            $subdatabase = new Database_vietnamnet($subvietnamnet);
            
            $content = $subdatabase->object->get_content();
            
            $date = $subdatabase->object->get_date();
        
            $this->insert_db($this->table, $title, $content, $suburl, $date);
            
        }
        echo "lưu dữ liệu thành công";
        }
 }