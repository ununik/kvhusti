<?php
class Kalendar extends Connection
{
    public function saveNew($from, $to, $title, $poradatel, $popis, $misto)
    {
        $date1 =strtotime($from);
        $date2 =strtotime($to);
        if($date1 > $date2 && $date != 0) {
            $date1 = $save;
            $date1 = $date2;
            $date2 = $save;
        }
        $result = parent::connect()->prepare("INSERT INTO `kalendar`(`from`, `to`, `title`, `poradatel`, `popis`, `misto`) VALUES (:from, :to, :title, :poradatel, :popis, :misto)");
        return $result->execute(array(
                ':from' => $date1,
                ':to' => $date2,
                ':title' => $title,
                ':poradatel' => $poradatel,
                ':popis' => $popis,
                ':misto' => $misto
        ));
    }
    
    public function getAll()
    {
        $result = parent::connect()->prepare("SELECT * FROM `kalendar` WHERE `active` = 1 ORDER BY `from` DESC");
        $result->execute();
        $pageResult = $result->fetchAll();
        
        return $pageResult;
    }
    public function getAllFromTo($date1, $date2)
    {
        $result = parent::connect()->prepare("SELECT * FROM `kalendar` WHERE (`active` = 1 AND ((`from` >= :date1 AND `from` < :date2) || (`from` < :date1 && `to` > :date2))) ORDER BY `from`");
        $result->execute(array(
                ':date1' => $date1,
                ':date2' => $date2,
        ));
        $pageResult = $result->fetchAll();
        
        return $pageResult;
    }
    
    public function getEvent($id)
    {
        $result = parent::connect()->prepare("SELECT * FROM `kalendar` WHERE `active` = 1 AND `id`=:id");
        $result->execute(array(
                ':id' => $id
        ));
        $pageResult = $result->fetch();
        
        return $pageResult;
    }
    public function updateEvent($id, $from, $to, $title, $poradatel, $popis, $misto)
    {
        $date1 =strtotime($from);
        $date2 =strtotime($to);
        if($date1 > $date2 && $date != 0) {
            $date1 = $save;
            $date1 = $date2;
            $date2 = $save;
        }
        $result = parent::connect()->prepare("UPDATE `kalendar` SET `from`=:from,`to`=:to,`title`=:title,`poradatel`=:poradatel,`popis`=:popis,`misto`=:misto WHERE `id`=:id");
        return $result->execute(array(
                ':from' => $date1,
                ':to' => $date2,
                ':title' => $title,
                ':poradatel' => $poradatel,
                ':popis' => $popis,
                ':misto' => $misto,
                ':id' => $id
        ));
    }
    public function delEvent($id)
    {
        $result = parent::connect()->prepare("UPDATE `kalendar` SET `active`=0 WHERE `id`=:id");
        return $result->execute(array(
                ':id' => $id
        ));
    }
}