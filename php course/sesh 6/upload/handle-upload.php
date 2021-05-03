<?php
if(isset($_POST['submit'])){
    $img=$_FILES['img'];
    echo '<pre>';
    print_r($img);
    echo '</pre>';

    $imgName=$img['name'];
    $imgType=$img['type'];
    $imgTmpName=$img['tmp_name'];
    $imgError=$img['error'];
    $imgSize=$img['size'];
    
    move_uploaded_file($imgTmpName,"upload/$imgName");
}
?>