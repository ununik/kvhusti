<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 14. 9. 2015
 * Time: 7:34
 */
$page->addToDrobeckovaNavigace('<a href="index.php?page=uniformy&subpage=ww2">WW2</a>');
$page->addToDrobeckovaNavigace('<a href="index.php?page=uniformy&subpage=ww2&category=seaforth">Seaforth Heighlanders</a>');
$page->setTitle("Seaforth Heighlanders | KVH Ústí nad Labem");
$container = "<h2>Seaforth Heighlanders</h2>";

$container .= "<a href='index.php?page=uniformy&subpage=ww2&uniform=listopad1943'>Vojín, 2. prapor Seaforth Highlanders, 152. brigáda, 51. horské divise, (listopad 1943)</a>";
$container .= "<br><a href='index.php?page=uniformy&subpage=ww2&uniform=cervenec1943'>WO1 2bn Seaforth Highlanders, Vizzini, Sicílie, (13. července 1943)</a>";


return $container;

