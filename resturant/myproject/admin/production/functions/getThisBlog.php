<?php 

        
    $getThisBlog=" SELECT * FROM blog where blogid=$blogid ";
    $getThisBlogResult=mysqli_query($conn,$getThisBlog);
    $thisBlog=mysqli_fetch_assoc($getThisBlogResult);
?>