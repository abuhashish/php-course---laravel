<?php
session_start();
if(isset($_SESSION['errors'])){?>
<div>
<ul>
<?php
foreach($_SESSION['errors']as$errors){?>
<li><?php echo $errors?></li>
<?php } 
?>
</ul>
</div>

<?php }
?>

<?php
unset($_SESSION['errors']);
?>

<form action='handle-login.php' method='post'>
<input type='email' name='uemail' placeholder='useremail'>
<input type='password'  name='upassword' placeholder='password'>
<input type='submit' name='submit' value='login'>
</form>