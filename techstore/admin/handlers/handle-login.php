<?php 
require_once("../../app.php");
use TechStore\Classes\Models\Admin;

if($request->postHas('submit')){
  //  $qty=$_POST['qty'];
   $email=$request->post('email');
   $password=$request->post('password');

   $ad = new Admin;
   
   $isLogin=$ad->login($email,$password,$session);

   if($isLogin){
       $request->Aredirect("index.php");
   }
   else{
    $request->Aredirect("login.php");
}

}