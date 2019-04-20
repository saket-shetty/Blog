<?php
session_start();
require('db.php');


if (isset($_POST['userid'])) {

$email = stripslashes($_REQUEST['userid']);
$email = mysqli_real_escape_string($conn,$email);

$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($conn,$password);

$query = "SELECT * FROM `login` WHERE email='$email' and password = '$password'";

$result = $conn->query($query);

$rows = mysqli_num_rows($result);

	if($rows){
		$_SESSION['login-auth'] = $email;
		header("Location: insertdata.php");
	}
	else{
		echo "bye stupid";
		echo "$password";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		SaketShetty | Login
	</title>
</head>
<body>

<form method="post" action="">
	Email:<input type="text" name="userid"><br>
	Password:<input type="password" name="password">
	<input type="submit" name="submit">
</form>

</body>
</html>