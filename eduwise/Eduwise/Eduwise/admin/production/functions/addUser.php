<?php 
    session_start();
    require_once('../../../includes/connect.php');
      $userName=$_POST['userName'];
      $userEmail=$_POST['userEmail'];
      $userPass=$_POST['userPass'];
      $phoneNumber=$_POST['phoneNumber'];
      $userImage=$_FILES['img'];
      $userImageName=$userImage['name'];
      $userImageTmpName=$userImage['tmp_name'];
      $dob=$_POST['dob'];
      $randomString=uniqid();
      $imgType=pathinfo($userImageName,PATHINFO_EXTENSION);
      $userImageName="$randomString.$imgType";
      $addUser="INSERT INTO users(userName,userEmail,userPassword,
      userPhone,userImage,DOB) VALUES('$userName','$userEmail','$userPass',
      '$phoneNumber','$userImageName','$dob')";

      if(mysqli_query($conn,$addUser)){
          move_uploaded_file($userImageTmpName,"../images/$userImageName");
          $_SESSION['userId']=$conn->insert_id;
          header("location: ../../../index.php");
      }else {
          echo mysqli_error($conn);
      }
?>
