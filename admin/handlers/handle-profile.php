<?php 
require_once("../../app.php");
use TechStore\Classes\Models\Admin;

if($request->postHas('submit')){
    $name=$request->post('name');
   $email=$request->post('email');
   $password=$request->post('password');
   $confirmPassword=$request->post('confirmPassword');

   $ad = new Admin;
  
   if(!empty($password)){
   //update query with password

   $hashedPassowrd=password_hash($password,PASSWORD_DEFAULT);
   
   $ad->update("name='$name',email='$email',`password`='$hashedPassowrd'",$session->get('adminId'));
   }
   
   else {
          //update query without password
    $ad->update("name='$name',email='$email'",$session->get('adminId'));

   }
   

   $request->Aredirect("handlers/handle-logout.php");
}