<?php
session_start();

if(!isset($_SESSION['login-auth'])){
    header("Location: login.php");
}

require('db.php');

if(isset($_GET['member'])){
$member = $_REQUEST['member'];
$topic = $_GET['topic'];
$abstract = $_REQUEST['blogdata'];
$description = $_REQUEST['description'];
$link = $_REQUEST['link'];
$image1 = $_REQUEST['image1'];
$image2 = $_REQUEST['image2'];
$image3 = $_REQUEST['image3'];
$image4 = $_REQUEST['image4'];
$image5 = $_REQUEST['image5'];
$api1title = $_REQUEST['api1title'];
$api1description = $_REQUEST['api1description'];
$api2title = $_REQUEST['api2title'];
$api2description = $_REQUEST['api2description'];


$query = "INSERT into `blog` (member, topic, blogdata, description, link, image1, image2, image3,
	image4, image5, api1title, api1description, api2title, api2description) 
	VALUES('$member', '$topic','$abstract','$description','$link','$image1','$image2','$image3','$image4',
	'$image5','$api1title','$api1description','$api2title','$api2description')";

$result = mysqli_query($conn, $query);

if ($result && $member != null) {
	echo "data inserted successfully";
}
else{
	echo $member;
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
	<form method="get" action="" class="w3-container w3-card-4 w3-light-grey">
		<center><h2>Enter new Blog Data</h2></center>
		Members:<input class="w3-input w3-border" type="text" name="member"><br>
		Topic:<input class="w3-input w3-border" type="text" name="topic"><br>
		Blog-abstract:<input class="w3-input w3-border" type="text" name="blogdata"><br>
		Description:<input class="w3-input w3-border" type="text" name="description"><br>
		Link:<input class="w3-input w3-border" type="text" name="link"><br>
		<center><h3>Image with html syntax</h3></center>
		Image-1:<input class="w3-input w3-border" type="text" name="image1"><br>
		Image-2:<input class="w3-input w3-border" type="text" name="image2"><br>
		Image-3:<input class="w3-input w3-border" type="text" name="image3"><br>
		Image-4:<input class="w3-input w3-border" type="text" name="image4"><br>
		Image-5:<input class="w3-input w3-border" type="text" name="image5"><br>
		<center><h3>API </h3></center>
		Api1-title:<input class="w3-input w3-border" type="text" name="api1title"><br>
		Api1-description<input class="w3-input w3-border" type="text" name="api1description"><br>
		Api2-title:<input class="w3-input w3-border" type="text" name="api2title"><br>
		Api2-description<input class="w3-input w3-border" type="text" name="api2description"><br>

		<center><input type="submit" name="submit" value="submit"></center>
	</form>

</body>
</html>