<?php
$getCom="SELECT * FROM comment 
INNER JOIN blog on comment.blogid=blog.blogid
INNER JOIN users on comment.commentUser=users.userId
where blog.blogid=$blogid
";
$getComResult=mysqli_query($conn,$getCom);
?>