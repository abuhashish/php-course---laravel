<?php 
require_once("app.php");
use TechStore\Classes\Models\Admin;

$ad = new Admin;

$res = $ad->login('tarfiq@gmail.com','123',$session);

echo '<pre>';
var_dump($res);
echo '</pre>';
?>