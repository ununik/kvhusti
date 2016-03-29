<?php
class Entry extends Connection
{
    private $_entriesOnPage = 2;
    private $_pageNum = 1;
    
    public function setPageNumber($new)
    {
    	$this->_pageNum = (int) $new;
    }
    public function getPageNumber()
    {
    	return $this->_pageNum;
    }
    
    public function getEntriesForPage()
    {
    	$result = parent::connect()->prepare("SELECT * FROM `entries` WHERE `active` = 1 ORDER BY `timestamp` DESC");
    	$result->execute();
    	$pageResult = $result->fetchAll();
    	$allEntries = array();
    	
    	$first = ($this->_pageNum - 1) * $this->_entriesOnPage;
    	$last = $first + $this->_entriesOnPage;
    	
    	if ($last > count($pageResult)) {
    		$last = count($pageResult);
    	}
    	
    	for ($first; $first < $last; $first++) {
    		$allEntries[] = $pageResult[$first];
    	}
    	
    	return $allEntries;
    }
    
    public function getPageCount()
    {
    	$result = parent::connect()->prepare("SELECT `id` FROM `entries` WHERE `active` = 1 ORDER BY `timestamp` DESC");
    	$result->execute();
    	$count = count($result->fetchAll());
    	  	
    	$pages = ceil(($count)/$this->_entriesOnPage);
    	return $pages;
    }
    
    public function getEntry($id)
    {
    	$result = parent::connect()->prepare("SELECT * FROM `entries` WHERE `id` = :id AND `active` = 1 LIMIT 1");
    	$result->execute(array(':id' => $id));
    	$pageResult = $result->fetch();
    	
    	return $pageResult;
    }
    
    public function saveNewEntry($author, $nadpis, $text)
    {
    	$timestamp = time();
    	$result = parent::connect()->prepare("INSERT INTO `entries`(`author`, `timestamp`, `text`, `title`) VALUES (:author, :timestamp, :text, :title)");
    	return $result->execute(array(
    		':author' => $author,
    		':timestamp' => $timestamp,
    		':text' => $text,
    		':title' => $nadpis
    	));
    }
    
    public function saveUprEntry ($id, $author, $nadpis, $text)
    {
    	$result = parent::connect()->prepare("UPDATE `entries` SET `text`=:text,`title`=:title WHERE `id`=:id AND `author`=:author");
    	return $result->execute(array(
    		':id' => $id,
    		':author' => $author,	
    		':text' => $text,
    		':title' => $nadpis
    	));
    }
    
    public function deleteEntry ($id, $author)
    {
    	$result = parent::connect()->prepare("UPDATE `entries` SET `active` = 0 WHERE `id`=:id AND `author`=:author");
    	return $result->execute(array(
    			':id' => $id,
    			':author' => $author
    	));
    }
    
    public function getAllEntryForAuthor ($author)
    {
    	$result = parent::connect()->prepare("SELECT * FROM `entries` WHERE `author` = :id AND `active` = 1 ORDER BY `id` DESC");
    	$result->execute(array(':id' => $author));
    	$pageResult = $result->fetchAll();
    	 
    	return $pageResult;
    }
}