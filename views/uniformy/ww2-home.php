<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 14. 9. 2015
 * Time: 7:32
 */
$page->addToDrobeckovaNavigace('<a href="index.php?page=uniformy&subpage=ww2">WW2</a>');
$page->setTitle("WW2 | KVH Ústí nad Labem");
$container = "<h2>WW2</h2>";
$container .= "<ul id='listWithoutPoints'>
                <li><a href='index.php?page=uniformy&subpage=ww2&category=engeneers'>Královští ženisté</a></li>
                <li><a href='index.php?page=uniformy&subpage=ww2&category=seaforth'>Seaforth Heighlanders</a></li>
                <li><a href='index.php?page=uniformy&subpage=ww2&category=12thParaBattalion'>12th parachute battalion</a></li>
              </ul>";

return $container;