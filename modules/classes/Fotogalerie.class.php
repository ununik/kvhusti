<?php
class Fotogalerie extends Connection
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
	public function getAllGaleries()
	{
		$result = parent::connect()->prepare("SELECT * FROM `fotogalerie` WHERE `active` = 1 ORDER BY `timestamp` DESC");
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
		$result = parent::connect()->prepare("SELECT `id` FROM `fotogalerie` WHERE `active` = 1");
		$result->execute();
		$count = count($result->fetchAll());
	
		$pages = ceil(($count)/$this->_entriesOnPage);
		return $pages;
	}
	
	public function getCountOfFotoForGallery($id)
	{
		$result = parent::connect()->prepare("SELECT `id` FROM `foto` WHERE `fotogalerie` = :id");
		$result->execute(array(':id' => $id));
		$count = count($result->fetchAll());
		
		return $count;
	}
	
	public function getGalleryFromId($id)
	{
		$result = parent::connect()->prepare("SELECT * FROM `fotogalerie` WHERE `active` = 1 AND `id`=:id LIMIT 1");
		$result->execute(array(':id' => $id));
		$pageResult = $result->fetch();
		
		return $pageResult;
	}
	
	public function getAllFotoFromGallery($id)
	{
		$result = parent::connect()->prepare("SELECT * FROM `foto` WHERE `active` = 1  AND `fotogalerie` = :id ORDER BY `timestamp` DESC");
		$result->execute(array(':id' => $id));
		$pageResult = $result->fetchAll();
		
		return $pageResult;
	}
	
	public function getFotoFromId($id)
	{
		$result = parent::connect()->prepare("SELECT * FROM `foto` WHERE `active` = 1  AND `id` = :id LIMIT 1");
		$result->execute(array(':id' => $id));
		$pageResult = $result->fetch();
		
		return $pageResult;
	}
	
	public function getAllOsobyNaFotkach ($id)
	{
		$result = parent::connect()->prepare("SELECT * FROM `osobyNaFotkach` WHERE `foto` = :id ORDER BY `id` DESC");
		$result->execute(array(':id' => $id));
		$pageResult = $result->fetchAll();
		
		return $pageResult;
	}
	
	public function getAllFotoFromOsobyNaFotkach($id)
	{
		$result = parent::connect()->prepare("SELECT `id`, `foto` FROM `osobyNaFotkach` WHERE `user` = :id ORDER BY `id` DESC");
		$result->execute(array(':id' => $id));
		$pageResult = $result->fetchAll();
		$allFotos = array();
		
		foreach($pageResult as $foto) {
			$allFotos[] = $this->getFotoFromId($foto['foto']);
		}
		
		return $allFotos;
	}
	
	public function deleteOsobaNaObrazku($foto, $user)
	{
		$result = parent::connect()->prepare("DELETE FROM `osobyNaFotkach` WHERE `foto`=:foto AND `user`=:user");
		$result->execute(array(':foto' => $foto, ':user' => $user));
	}
	
	public function addNewAlbum($title, $description, $author, $date1, $date2)
	{
		$timestamp = time();
		$date1 =strtotime($date1);
		$date2 =strtotime($date2);
		
		$db = parent::connect();
		$result = $db->prepare("INSERT INTO `fotogalerie` (`title`, `description`, `author`, `timestamp`, `date`, `date2`) VALUES (:title, :description, :author, :timestamp, :date1, :date2)");
		$result->execute(array(
			':title' => $title,
			':description' => $description,
			':author' => $author,
			':timestamp' => $timestamp,
			':date1' => $date1,
			':date2' => $date2
		));
		
		return $db->lastInsertId();
	}
}