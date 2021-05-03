<?php 

  require_once('../../../include/connect.php');

    $itemName=$_POST['itemName'];
    $itemPrice=$_POST['itemPrice'];
    $itemDes=$_POST['itemDes'];
    $itemCatagory=$_POST['itemCatagory'];
    $itemId=$_POST['itemId'];
echo $itemId;

$updateItem="UPDATE item 
SET itemName='$itemName',
itemPrice='$itemPrice',
itemDes='$itemDes',
itemCatagory='$itemCatagory'
where itemId=$itemId
 ";

 if(mysqli_query($conn,$updateItem)){ ?>
 <script>alert("item updated");</script>
<?php   
    header("refresh:0;url=../control.php");
}else {
die("error ".mysqli_error($conn));
}
