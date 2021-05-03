<?php 

    $getThisCourse=" SELECT * FROM course where courseId=$courseId ";
    $getThisCourseResult=mysqli_query($conn,$getThisCourse);
    $thisCourse=mysqli_fetch_assoc($getThisCourseResult);
?>