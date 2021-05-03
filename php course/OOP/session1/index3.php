<?php
class DB{
    var $serverName,$userName,$password,$dbName,$conn;
    function __construct($serverName,$userName,$password,$dbName){
        $this->userName=$userName;
        $this->serverName=$serverName;
        $this->password=$password;
        $this->dbName=$dbName;
        $this->conn=mysqli_connect(
            $this->serverName,
            $this->userName,
            $this->password,
            $this->dbName
        );
    }
}
$kfc=new DB('localhost','root','','myproject');
?>