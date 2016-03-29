<?php
class Profil extends Connection
{
	private $_id = 0;
	private $_addEntry = false;
	
	public function setId($new)
	{
		$this->_id = $new;
	}
	
	public function checkLogin($login, $password)
	{
		$passwordHash = $password;
		
		$result = parent::connect()->prepare("SELECT `id` FROM `users` WHERE `login` = :login AND `passwordHash` = :password LIMIT 1");
		$result->execute(array(
			':login' => $login,
			':password' => $passwordHash,
		));
		$pageResult = $result->fetch();
		
		if (isset($pageResult['id']) && $pageResult['id'] > 0) {
			$_SESSION['kvh_login'] = $pageResult['id'];
			return true;
		}
		return false;
	}
	
	public function checkIDLogin($id)
	{
		$result = parent::connect()->prepare("SELECT * FROM `users` WHERE `id` = :id LIMIT 1");
		$result->execute(array(
				':id' => $id
		));
		$pageResult = $result->fetch();
	
		if (isset($pageResult['id']) && $pageResult['id'] > 0) {
			$this->_id = $pageResult['id'];
			$this->_addEntry = $pageResult['addEntry'];
			
			
			$_SESSION['kvh_login'] = $pageResult['id'];
			return true;
		}
		return false;
	}
	
	public function getNameFromId($id)
	{
		$result = parent::connect()->prepare("SELECT `jmeno`, `prijmeni` FROM `users` WHERE `id` = :id LIMIT 1");
		$result->execute(array(':id' => $id));
		$pageResult = $result->fetch();
		 
		return $pageResult['jmeno'].' '.$pageResult['prijmeni'];
	}
	
	public function getId()
	{
		return $this->_id;
	}
	
	public function get_addEntry()
	{
		return $this->_addEntry;
	}
	
	public function getAllMembers()
	{
		$result = parent::connect()->prepare("SELECT `id` FROM `users` ORDER BY `jmeno`, `prijmeni`");
		$result->execute();
		$pageResult = $result->fetchAll();
	
		return $pageResult;
	}
	
	public function getMember($id)
	{
		$result = parent::connect()->prepare("SELECT * FROM `users` WHERE `id` = :id LIMIT 1");
		$result->execute(array(':id' => $id));
		$pageResult = $result->fetch();
	
		return $pageResult;
	}
	
	public function setField($field, $value, $user)
	{
		$result = parent::connect()->prepare("UPDATE `users` SET `$field`=:value WHERE `id`=:id");
		return $result->execute(array(
				':value' => $value,
				':id' => $user
		));
	}
	
	public function getAllZajmy ($id)
	{
	    $result = parent::connect()->prepare("SELECT * FROM `users_zajmy` WHERE `user`=:id ORDER BY `text`");
	    $result->execute(array(':id' => $id));
	    $pageResult = $result->fetchAll();
	    
	    return $pageResult;
	}
	
	public function addNewZajem ($text, $user)
	{
	    $result = parent::connect()->prepare("INSERT INTO `users_zajmy` (`text`, `user`) VALUES (:value, :id)");
	    return $result->execute(array(
	            ':value' => $text,
	            ':id' => $user
	    ));
	}
	public function changeZajem ($text, $id)
	{
	    $result = parent::connect()->prepare("UPDATE `users_zajmy` SET `text`=:value WHERE `id`=:id");
	    return $result->execute(array(
	            ':value' => $text,
	            ':id' => $id
	    ));
	}
	public function deleteZajem ($id)
	{
	    $result = parent::connect()->prepare("DELETE FROM `users_zajmy` WHERE `id`=:id ");
	    return $result->execute(array(
	            ':id' => $id
	    ));
	}
}