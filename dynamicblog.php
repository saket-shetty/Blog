<?php
session_start(); 
require('db.php');
$var_value = $_SESSION['newvar'];

// $_GET['newvar'] = $_SESSION['newvar'];

// echo "GET".$_GET['newvar'];

// if($_SESSION['newvar'] == null){
// 	header("Location: blog.php");
// }

?>


<!DOCTYPE html>
<html>
<head>
<title>SaketShetty | Blog</title>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' crossorigin='anonymous'>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<style type="text/css">
	body{
		margin-right: 5px;
		margin-left: 5px;
		margin-bottom: 5px;
	}

	#social-media{
	  width: 100%;
	  height: 220px;
	  margin-top: 5px;
	  background:#2e2e2e;
	  color: #fff;
	  font-family: 'Noto Sans JP', sans-serif;
	  padding: 10px;
	}
	#social-media a{
	  padding: 10px;
	}
	#social-media h2{
	  padding-bottom: 10px;
	  padding-top: 20px;
	}

	#social-media img{
		width: 40px;
		height: 40px;
	}
	.content-body{
		padding-left: 50px;
		padding-right: 50px;
	}
	.coder, .content{
		text-align: left;
	}
	.coder{
		font-size: 20px;
	}
	.image{
		width: 220px;
		height: 400px;
		padding: 10px;
	}
	.topnav {
	  overflow: hidden;
	  background-color: #333;
	}

	.topnav a {
	  float: left;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	  font-size: 17px;
	}

	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}
</style>
</head>
<body>

<div class="topnav">
<a class="active" href="index.php">Home</a>
<a href="blog.php">Blogs</a>
<a href="contact.php">Contact</a>
</div>

<center>
<h1>
	<?php
		$query = "SELECT * FROM `blog` WHERE topic='$var_value'";
		$result = $conn->query($query);

		if($result->num_rows>0){
			while ($rows = $result->fetch_assoc()) {
				echo $rows['topic'];
			}
		}
	?>
</h1>

<div class="content-body">
	<div class="coder">
		<p>Coder : 
		<?php
		
		$query = "SELECT * FROM `blog` WHERE topic='$var_value'";

		$result = $conn->query($query);

		if ($result->num_rows >0) {
			while ($rows = $result-> fetch_assoc()) {
				echo $rows['member']."</p>" ;
			}
		}
		?>
	</p>
	</div>
	<div class="content">
		<p style="font-size: 23px;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php
		$query = "SELECT * FROM `blog` WHERE topic='$var_value'";

		$result = $conn->query($query);

		if ($result->num_rows >0) {
			while ($rows = $result-> fetch_assoc()) {
				echo $rows['blogdata']."</p>" ;
			}
		}
		?>
		<center>
			<div class="row">
				<div class="col-sm-12">
					<?php
						$query = "SELECT * FROM `blog` WHERE topic='$var_value'";

						$result = $conn->query($query);

						if ($result->num_rows >0) {
							while ($rows = $result-> fetch_assoc()) {
								echo $rows['image1'];
								echo $rows['image2'];
								echo $rows['image3'];
							}
						}
						?>
				</div>
			</div>
		</center>
		<p style="font-size: 23px;">
			<?php
				$query = "SELECT * FROM `blog` WHERE topic='$var_value'";
				$result = $conn->query($query);

				if($result->num_rows>0){
					while ($rows = $result->fetch_assoc()) {
						echo $rows['description'];
					}
				}
			?>  
		</p>
		
		<center>
			<div class="row">
				<div class="col-sm-12">
					<?php
						$query = "SELECT * FROM `blog` WHERE topic='$var_value'";

						$result = $conn->query($query);

						if ($result->num_rows >0) {
							while ($rows = $result-> fetch_assoc()) {
								echo $rows['image4'];
								echo $rows['image5'];
							}
						}
						?>
				</div>
			</div>
		</center>
		<p style="font-size: 23px;">Api and Library used<p>
		<h1><?php
		$query ="SELECT * FROM `blog` WHERE topic ='$var_value'";
		$result = $conn->query($query);
		if($result->num_rows>0){
			while ($rows = $result->fetch_assoc()) {
				echo $rows['api1title'];
			}
		}
		 ?></h1>
		<p style="font-size: 21px;">
			<?php
			$query ="SELECT * FROM `blog` WHERE topic ='$var_value'";
			$result = $conn->query($query);
			if($result->num_rows>0){
				while ($rows = $result->fetch_assoc()) {
					echo $rows['api1description'];
				}
			}
		 ?>
		</p>
		<h1>
		<?php
		$query ="SELECT * FROM `blog` WHERE topic ='$var_value'";
		$result = $conn->query($query);
		if($result->num_rows>0){
			while ($rows = $result->fetch_assoc()) {
				echo $rows['api2title'];
			}
		}
		 ?></h1>
		<p style="font-size: 21px;">
			<?php
			$query ="SELECT * FROM `blog` WHERE topic ='$var_value'";
			$result = $conn->query($query);
			if($result->num_rows>0){
				while ($rows = $result->fetch_assoc()) {
					echo $rows['api2description'];
				}
			}
		 ?>
		</p>
	</div>
</div>
</center>

<div id="social-media">
<h2 style="text-align: center;">Contact / Social-Media</h2>
<center>
  <a href="https://www.github.com/saket-shetty">
    <img src="https://raw.githubusercontent.com/DevonCrawford/Personal-Website/master/static/images/icons/github.png">
  </a>
  <a href="https://twitter.com/Saketshetty">
    <img src="https://raw.githubusercontent.com/DevonCrawford/Personal-Website/master/static/images/icons/twitter.png">
  </a>
  <a href="https://www.linkedin.com/in/saket-shetty-5b4018159/">
    <img src="https://raw.githubusercontent.com/DevonCrawford/Personal-Website/master/static/images/icons/linkedIn.png">
  </a>
</center>
</div>

</body>
</html>