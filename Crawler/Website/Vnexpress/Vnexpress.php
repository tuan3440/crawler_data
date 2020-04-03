
<?php



class Vnexpress extends Website {

    public $regex_title = "/<a data-medium=\"Item[^>]*>(.*?)<\/a>/";
    public $regex_content = "/<div id=\"ArticleContent\" class=\"ArticleContent\">(.*?)<div class=\"inner-article\">/";
    public $regex_date = "/<span class=\"time left\">(.*?)<\/span>/";
    public $regex_link = "/<p class=\"Normal\">\n?(.*?)<\/p>/";

      

 }