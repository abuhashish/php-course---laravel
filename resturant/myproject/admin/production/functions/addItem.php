<?php
require_once("../../../include/connect.php");
$itemName=$_POST['itemName'];
$itemImg=$_FILES['itemImg'];
echo $itemImgName=$itemImg['name'];
echo $itemImgTmpName=$itemImg['tmp_name'];
$itemPrice=$_POST['itemPrice'];
$itemDes=$_POST['itemDes'];
$itemCatagory=$_POST['radio'];

$insertitem="INSERT INTO item(itemName,itemDes,itemImg,itemPrice,itemCatagory)
VALUES('$itemName','$itemDes','$itemImgName','$itemPrice','$itemCatagory')";
if(mysqli_query($conn,$insertitem)){
    move_uploaded_file($itemImgTmpName,"../images/$itemImgName");
    ?>
    <script>alert("item added successfully");</script>
<?php

}
else{
    die("error".mysqli_error($conn));
}
?>
