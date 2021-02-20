<?php 
namespace TechStore\Classes\Models;
use TechStore\Classes\Db;
use TechStore\Classes\Session;

class Admin extends Db {
     public function __construct()
     {
         $this->table='admins';
         $this->connect();
     }

     public function login($email,$password,Session $session)
     {
        $sql="SELECT * FROM $this->table where email='$email'";
        $result=mysqli_query($this->conn,$sql);
        $admin = mysqli_fetch_assoc($result);
       if(!empty($admin)){
            $hashedPassowrd=$admin['password'];
           $isSame=password_verify($password,$hashedPassowrd);
           if($isSame){
             $session->set('adminId',$admin['id']);
             $session->set('adminName',$admin['name']);
             $session->set('adminEmail',$admin['email']);
             return true;
         }else {
            return false;   
         }
     
     
        } else {
            return false;
        }
       
     }

     public function logout(Session $session){
         $session->remove('adminId');
         $session->remove('adminName');
         $session->remove('adminEmail');

     }
 }
?>