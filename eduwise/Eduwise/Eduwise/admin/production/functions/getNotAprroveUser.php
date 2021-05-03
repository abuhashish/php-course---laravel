<?php
require_once("../../includes/connect.php");
$getNotAppUser="SELECT * FROM users where userStatus=1";
$getNotAppUserResult=mysqli_query($conn,$getNotAppUser);

?>