<?php 

    $getThisItem=" SELECT * FROM item where itemId=$itemId ";
    $getThisItemResult=mysqli_query($conn,$getThisItem);
    $thisItem=mysqli_fetch_assoc($getThisItemResult);
?>