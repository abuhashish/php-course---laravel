<?php 
use TechStore\Classes\Session;
use TechStore\Classes\Request;
// path & url 
define('PATH',__DIR__.'/');//include or require 
define('URL',"http://localhost/php_course/techstore/");//links
define('AURL',"http://localhost/php_course/techstore/admin/");//links

//db 
define("DB_SERVERNAME","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","techstore");
//include or requre classes
require_once(PATH."vendor/autoload.php");
//object 
$request = new Request;
$session = new Session;
?>