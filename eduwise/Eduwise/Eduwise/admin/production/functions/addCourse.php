<?php 
    require_once("../../../includes/connect.php");
    //get data from html form
    $courseName=$_POST['courseName'];
    $courseImg=$_FILES['img'];
    $courseImageName=$courseImg['name'];
    $courseImgTmpName=$courseImg['tmp_name'];
    $coursePrice=$_POST['coursePrice'];
    $courseDescription=$_POST['courseDescription'];
    $courseDays=$_POST['courseDays'];
    $courseCapacity=$_POST['courseCapacity'];

    // INSERT data to course table

    $insertCourse="INSERT INTO course(courseName,courseImage,
    coursePrice,
    courseDescription,courseDays,courseCapacity)
    VALUES('$courseName','$courseImageName','$coursePrice',' $courseDescription',' $courseDays','$courseCapacity')";
    echo '<pre>';
    print_r($courseImg);
    echo '</pre>';
    if(mysqli_query($conn,$insertCourse)){

        move_uploaded_file($courseImgTmpName,"../images/$courseImageName");
        ?>
        <script>alert("course added successfully");</script>
   <?php  
        //    header("refresh:0;url=../course.php");
}
else {
    die("error".mysqli_error($conn));
}
?>