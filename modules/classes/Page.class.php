<?php

/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 14. 9. 2015
 * Time: 6:45
 */
class Page extends Connection
{
    protected $navigation;
    protected $drobeckovaNavigace = array();
    protected $content;
    protected $title;

    public function setNavigation($navigation){
        $this->navigation = $navigation;
    }
    public function getNavigation(){
        return $this->navigation;
    }
    
    public function addToDrobeckovaNavigace($new)
    {
        $this->drobeckovaNavigace[] = $new;
    }
    public function getDrobeckovaNavigace()
    {
        $navigation = '';
        foreach($this->drobeckovaNavigace as $nav){
            $navigation .= $nav . ' / ';
        }
        
        return $navigation;
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
    
    public function getDBContent($page)
    {
        $result = parent::connect()->prepare("SELECT * FROM `pages` WHERE `url_name` = :page LIMIT 1");
        $result->execute(array(':page' => $page));
        $pageResult = $result->fetch();
        
        return $pageResult;
    }
}