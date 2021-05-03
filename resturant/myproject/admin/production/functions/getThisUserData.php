<?php 
$userId=$_SESSION['userId'];
require_once("include/connect.php");
$getThisUserData="SELECT * FROM users where userId=$userId";
$userDataResult=mysqli_query($conn,$getThisUserData);
$thisUser=mysqli_fetch_assoc($userDataResult);
?>