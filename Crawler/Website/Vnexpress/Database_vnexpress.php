
<?php

class Database_vnexpress extends Database {
    protected $table = 'vnexpress';
    protected $object;
    function __construct(Vnexpress $object) {
           
            $this->object = $object;
          }


        function insert() {
         

        $title = $this->object->get_title();
        
        $link = $this->object->get_link();
        
        foreach(array_combine($title, $link) as $title => $link) {
            global $url;
            $suburl = $url.$link;
           
            $subvnexpress = new Vnexpress($suburl);
            
            $subdatabase = new Database_vnexpress($subvnexpress);
            
            $content = $subdatabase->object->get_content();
            
            $date = $subdatabase->object->get_date();
        
            $this->insert_db($this->table, $title, $content, $suburl, $date);
            
        }
        echo "lưu dữ liệu thành công";
        }
 }