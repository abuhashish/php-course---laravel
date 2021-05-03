<?php
session_start();
require_once("../../../include/connect.php");
$userEmail=$_POST['email'];
$userPassword=$_POST['password'];
$login="SELECT * FROM users WHERE userEmail='$userEmail' AND userPassword='$userPassword'";
$loginResult=mysqli_query($conn,$login);
$userData=mysqli_fetch_assoc($loginResult);
if(mysqli_num_rows($loginResult)>0){
  $_SESSION['userId']=$userData['userid'];
  $_SESSION['userStatus']=$userData['userStatus'];
header("location: ../../../index.php");
}
else{
  header("location: ../../../index.php");
}
?>