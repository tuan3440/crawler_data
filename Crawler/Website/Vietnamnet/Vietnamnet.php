<?php



class Vietnamnet extends Website {

    public $regex_title = "/<h3><a[^>]*>(.*?)<\/a><\/h3>/";
    public $regex_content = "/<div id=\"ArticleContent\" class=\"ArticleContent\">(.*?)<div class=\"inner-article\">/";
    public $regex_date = "/<p class=\"time-zone\">(.*?)+(\n|\r)?\s+<\/p>/";
    public $regex_link = "/<h3><a href=\"(.*?)\"[^>]*>(.*?)<\/a><\/h3>/";

      

 }