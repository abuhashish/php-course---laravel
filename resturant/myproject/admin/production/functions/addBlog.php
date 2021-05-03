<?php 
require_once("../../../include/connect.php");
    //get data from html form
    $blogTitle=$_POST['blogTitle'];
    $blogImg=$_FILES['img'];
    $blogImageName=$blogImg['name'];
    $blogImgTmpName=$blogImg['tmp_name'];
    $blogDescription=$_POST['blogDescription'];

   // INSERT data to course table

    $insertBlog="INSERT INTO blog(blogTitle,img,
    blogDescription) VALUES('$blogTitle','$blogImageName','$blogDescription')";

    if(mysqli_query($conn,$insertBlog)){

        move_uploaded_file($blogImgTmpName,"../images/$blogImageName");
        ?>
        <script>alert("Blog added successfully");</script>
   <?php  
            header("refresh:0;url=../blog.php");
}
else {
    die("error".mysqli_error($conn));
}
?>