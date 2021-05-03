<?php 
 $deleteCourse="DELETE FROM course where courseId=$courseId";
 if(mysqli_query($conn,$deleteCourse)){?>
            <script>alert("course deleted");</script>
 <?php
    header("refresh:0;url=control_course.php");
} else {
    die("error". mysqli_error($conn));
}
?>