<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 10. 9. 2015
 * Time: 17:06
 */


return "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
<html>
  <head>
  <meta http-equiv='content-type' content='text/html; charset=utf-8'>
  <style type='text/css' media='all'>@import 'css/style.css';</style>
    <script src='js/lightbox2-2.05-maxwidth/js/jquery-1.7.2.min.js'></script>
    <script src='js/lightbox2-2.05-maxwidth/js/lightbox.js'></script>
    <link href='js/lightbox2-2.05-maxwidth/css/lightbox.css' rel='stylesheet' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
    <link rel='shortcut icon' href='images/ikona.ico'/>
    {$page->getScript()}
  <title>{$page->getTitle()}</title>
  </head>
  <body>
    <a href='index.php' id='header'><h1>Klub vojenské historie<span>Ústí nad Labem</span></h1></a>
    <div id='navigation'>{$page->getNavigation()}</div>
    <div id='body'>
    <div id='drobeckovaNavigace'>{$page->getDrobeckovaNavigace()}</div>
    <div id='content'>{$page->getContent()}</div>
    </div>
    <div id='adminLog'>{$page->getAdminLog()}</div>
    <div id='footer'>
     <div id='navigation-footer'>{$page->getNavigation()}</div>
     <div id='author'>Vytvořil: ununik | 2015 | ununik[et]gmail.com</div>
     </div>
     <div id='panel_l'></div>
     <div id='panel_r'></div>
  </body>
</html>";