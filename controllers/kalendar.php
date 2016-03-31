<?php
$page->addToDrobeckovaNavigace('<a href="index.php?page=kalendar">Kalendář</a>');
$page->setTitle("Kalendář | KVH Ústí nad Labem");
$kalendarClass = new Kalendar();

$thisYear = date('Y');
if(isset($_GET['year']) && $_GET['year'] != '') {
    $thisYear = $_GET['year'];
}
$nextYear = $thisYear + 1;
$previousYear = $thisYear - 1;

$from = strtotime("$thisYear-01-01");
$to = strtotime("$nextYear-01-01");
$event = $kalendarClass->getAllFromTo($from, $to);
$months = array('prosinec', 'leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'září', 'říjen', 'listopad', 'prosinec');
$kalendar = include 'views/kalendar/kalendar.php';

return include 'views/kalendar/basic.php';