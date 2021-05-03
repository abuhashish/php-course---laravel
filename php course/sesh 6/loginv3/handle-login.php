<?php 
session_start();
if(isset($_POST['submit'])){
$userEmail=$_POST['uemail'];
$userPassord=$_POST['upassword'];
$errors=[];
$passlen=strlen($userPassord);
#email validation
if(empty($userEmail)){
    $errors[]="email is required ";
}elseif(!filter_var($userEmail,FILTER_VALIDATE_EMAIL)){
    $errors[]="email is not valid";
}
#password validation
if(empty($userPassord)){
    $errors[]="password is requried";
}elseif($passlen<8 or $passlen>30){
    $errors[]="password should be between 8 and 30";
}elseif(!is_string($userPassord)){
    $errors[]="password is not valid";
}
if(empty($errors)){
$_SESSION['email']=$userEmail;
$_SESSION['is_login']=true;

header("location: index.php");
}
else{
    $_SESSION['errors']=$errors;
    header("location: login.php ");
}
}
?>