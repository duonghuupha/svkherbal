<?php
session_start();
define('URL', 'http://'.$_SERVER['HTTP_HOST']);
define('URL_IMAGE', 'http://portalsvk:81/public/images');
$dirtionary = realpath($_SERVER['DOCUMENT_ROOT']); 
$dirtionary = str_replace("svkherbal", "portalsvk", $dirtionary);
define('DIR_IMAGE', $dirtionary.'/public/images');
define('DIR', $_SERVER['DOCUMENT_ROOT']);
?>
