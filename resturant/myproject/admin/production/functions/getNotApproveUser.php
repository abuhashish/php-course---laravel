<?php
require_once("../../include/connect.php");
$getNotAppUser="SELECT * FROM users where userStatus=1";
$getNotAppUserResult=mysqli_query($conn,$getNotAppUser);

?>