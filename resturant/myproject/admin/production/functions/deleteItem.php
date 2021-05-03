<?php
$deleteItem="DELETE FROM item where itemId=$itemId";
if(mysqli_query($conn,$deleteItem)){?>
<script>alert("item deleted")</script>
<?php 
header("refresh:0;url=control.php ");
}else{
die("error ".mysqli_error($conn));
}
?>