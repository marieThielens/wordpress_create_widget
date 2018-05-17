<?php

class MariePlugin_Page_Title
{
    public function __construct()
    {
        add_filter('pre_get_document_title', array($this, 'change_the_title'));
    }
    function change_the_title() {
        return $title . 'Le titre changé Marie';
    }
}



 ?>   