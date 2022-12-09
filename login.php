<?php 
if(isset($_POST['sub'])){
    include "loginData.php";
    include "loginpage1.php";
	$emailg=$_POST["email-log"];
    $passwordg=$_POST["password-log"];
	$stm=$database->prepare("SELECT email, passowrd FROM log-in where email=$emailg and passowrd=$passwordg ");
    if ($emailg=='email' and  $passwordg=='passowrd') {
		$login=$_POST["login"];
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="loginall.css">

</head>
<style>
	body {
		background-image: url('imgs/gg.jpg');
		background-attachment: fixed;
	}
</style>

<body>

	<div class="square-lg">
		<div class="dd">
			<i><input type="email" name="email-log" placeholder="Entar Email" class="inp-email" style="margin-top:60px;"></i>
			<i><input type="password" name="password-log" placeholder="Entar password" class="inp-email"></i>

			<a href="http://localhost/mdad/loginpage1.php"> <button type="button"  class="login-lg"><b>sign up</button></b></a>
			<a href="http://localhost/mdad/viewcar.php"><button type="button"  name="login" class="login-bak">log in</button><hr/></a>
		</div>

	</div>
</body>

</html>