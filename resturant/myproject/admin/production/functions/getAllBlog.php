<?php 
    $getAllBlog="SELECT * FROM blog";
    $getAllBlogResult=mysqli_query($conn,$getAllBlog);
    $blogNumber=mysqli_num_rows($getAllBlogResult);
?>