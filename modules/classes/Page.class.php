<?php

/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 14. 9. 2015
 * Time: 6:45
 */
class Page
{
    protected $navigation;
    protected $content;
    protected $title;

    public function setNavigation($navigation){
        $this->navigation = $navigation;
    }
    public function getNavigation(){
        return $this->navigation;
    }

    public function setContent($content){
        $this->content = $content;
    }
    public function getContent(){
        return $this->content;
    }

    public function setTitle($title){
        $this->title = $title;
    }
    public function getTitle(){
        return $this->title;
    }
}