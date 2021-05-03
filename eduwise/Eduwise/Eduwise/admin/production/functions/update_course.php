<?php 

  require_once('../../../includes/connect.php');

    $courseName=$_POST['courseName'];
    $coursePrice=$_POST['coursePrice'];
    $courseDescription=$_POST['courseDescription'];
    $courseDays=$_POST['courseDays'];
    $courseCapacity=$_POST['courseCapacity'];
    $courseId=$_Get['courseId'];

    $updateCourse="UPDATE course 
    SET courseName='$courseName',
    coursePrice='$coursePrice',
    courseDescription='$courseDescription',
    courseDays='$courseDays',
    courseCapacity='$courseCapacity'
    where courseId=$courseId
     ";

     if(mysqli_query($conn,$updateCourse)){ ?>
     <script>alert("course updated");</script>
   <?php   
        header("refresh:0;url=../control_course.php");
}else {
    die("error ".mysqli_error($conn));
}

    