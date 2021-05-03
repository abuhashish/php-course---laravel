<?php 
    class User{
    var $name;
    var $email;
    var $password;
    var $is_Admin=false;
    function hello(){
        echo "hello  its me , ".$this->email;
        }
    function __construct($userName,$userEmail,$userPassword)
    {
        $this->name=$userName;
        $this->email=$userEmail;
        $this->password=$userPassword;
    }
}
$u1 = new User;

$u1->name='amro abuhashish';
$u1->email='amro@gmail.com';
$u1->password='123';
$u1->hello();
?>