<?php



class Dantri extends Website {
   
    public $regex_title = "/<h2><a[^>]*>(.*?)<\/a><\/h2>/";
    public $regex_content = "/<div id=\"divNewsContent\" class=\"fon34 mt3 mr2 fon43 detail-content\">(.*?)<div id=\"div_tamlongnhanai\"><\/div>/s";
    public $regex_date = "/<span class=\"fr fon7 mr2 tt-capitalize\">(\n|\r)?\s+(.*?)(\n|\r)?\s+<\/span>/";
    public $regex_link = "/<h2><a[^>]*href=\"(.*?)\"[^>]*>(.*?)<\/a><\/h2>/";

    
}