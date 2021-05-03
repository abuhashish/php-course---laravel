<?php
$updateUserStatus="UPDATE users SET
userStatus=2 where userid=$userid
";
if(mysqli_query($conn,$updateUserStatus)){?>
<script>alert("user has been approved")</script>
<?php
header("refresh:0;url=userNotApprove.php");
}
?>