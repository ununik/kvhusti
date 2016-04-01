<?php
class HomeMade extends Connection
{
    private $_pageNum = 1;
    private $_entriesOnPage = 15;
    
    public function setPageNumber($new)
    {
        $this->_pageNum = (int) $new;
    }
    public function getPageNumber()
    {
        return $this->_pageNum;
    }
    
    public function getAll()
    {
        $result = parent::connect()->prepare("SELECT * FROM `homemade` WHERE `active` = 1 ORDER BY `id` DESC");
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
        $result = parent::connect()->prepare("SELECT `id` FROM `homemade` WHERE `active` = 1");
        $result->execute();
        $count = count($result->fetchAll());
    
        $pages = ceil(($count)/$this->_entriesOnPage);
        return $pages;
    }
    
    public function createNew($author, $title, $description)
    {
        $db = parent::connect();
        $result = $db->prepare("INSERT INTO `homemade`(`author`, `title`, `description`) VALUES (:author, :title, :description)");
        $result->execute(array(
                ':title' => $title,
                ':description' => $description,
                ':author' => $author,
        ));
        
        return $db->lastInsertId();
    }
    public function saveFile($path, $type, $name, $title, $id )
    {
        $result = parent::connect()->prepare("INSERT INTO `homemade_files`(`path`, `type`, `name`, `title`, `homemade`) VALUES (:path, :type, :name, :title, :id)");
        $result->execute(array(
                ':path' => $path,
                ':type' => $type,
                ':name' => $name,
                ':title' => $title,
                ':id' => $id
        ));
    }
    
    public function getOne($id)
    {
        $result = parent::connect()->prepare("SELECT * FROM `homemade` WHERE `active` = 1 AND `id`=:id");
        $result->execute(array(':id' =>$id));
        $all = $result->fetch();
        
        return $all;
    }
    
    public function getAllFilesForId($id)
    {
        $result = parent::connect()->prepare("SELECT * FROM `homemade_files` WHERE `active` = 1  AND `homemade`=:id");
        $result->execute(array(':id' => $id));
        $all = $result->fetchAll();
    
        return $all;
    }
    public function deleteHomemade($id)
    {
        $result = parent::connect()->prepare("UPDATE `homemade_files` SET `active`=0  WHERE `homemade`=:id");
        return $result->execute(array(':id' => $id));
    }
}