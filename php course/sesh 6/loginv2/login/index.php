<?php 
session_start();
if(isset($_SESSION['is_login']) and $_SESSION['is_login']==true){
    echo "hello,your email is {$_SESSION['email']}";
}else {
    echo "sorry,plz login <a href='login.php'>login</a>";
}

?>
<a href='logout.php'>logout</a>