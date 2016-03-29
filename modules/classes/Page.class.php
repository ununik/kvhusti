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
    protected $script = '';
    protected $title;
    protected $admin_log;

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
    
    public function setAdminLog($new)
    {
    	$this->admin_log = $new;
    }
    
    public function getAdminLog()
    {
    	return $this->admin_log;
    }

    public function addScript($new)
    {
    	$this->script .= $new;
    }
    public function getScript()
    {
    	return $this->script;
    }
    
    public function getReadableDate ($timestamp1, $timestamp2 = 0)
    {
    	if ($timestamp2 != 0 && ($timestamp1 > $timestamp2)) {
    		$pamet = $timestamp2;
    		$timestamp2 = $timestamp1;
    		$timestamp1 = $pamet;
    	}
    	
    	if ($timestamp2 == 0) {
    		return date ('j. n. Y', $timestamp1);
    	}
    	
    	if (date ('Y', $timestamp1) != date ('Y', $timestamp2)) {
    		return date ('j. n. Y', $timestamp1) .' - '.date ('j. n. Y', $timestamp2);
    	}
    	
    	if (date ('n', $timestamp1) != date ('n', $timestamp2)) {
    		return date ('j. n.', $timestamp1) . ' - ' . date ('j. n. Y', $timestamp2);
    	}
    	
    	if (date ('j', $timestamp1) != date ('j', $timestamp2)) {
    		return date ('j.', $timestamp1) . ' - ' . date ('j. n. Y', $timestamp2);
    	}
    	
    	return date ('j. n. Y', $timestamp1);
    }
}