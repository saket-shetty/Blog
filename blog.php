<?php
session_start();
require('db.php');

$var = $_POST['submit'];

$_SESSION['newvar'] = $var;

echo "GET".$_GET['newvar'];

if (isset($_SESSION['newvar'])) {
  header("Location: dynamicblog.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* { 
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 5px;
  background: #2e2e2e;
}

.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

.leftcolumn {
  width: 100%;
}

.leftcolumn h5, h2{
  text-align: center;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}
center img{
  width: 220px;
  height: 400px;
  padding: 10px;
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
}
p{
  font-size: 18px;
}

</style>
</head>
<body>

<div class="header">
  <h2>Saket Shetty</h2>
</div>



<form method="post" action="">



<div class="row">
        <?php
          $query = "SELECT * FROM `blog`";
          $result = $conn->query($query);

          if($result->num_rows>0){
          while($rows = $result->fetch_assoc()){
          
          echo '
          <div class="leftcolumn">
        <div class="card">
          <h2>'     
            .$rows['topic']."
            </h2>
          <h5>A Social Media App, Dec 7, 2017</h5>
            <center>
                ".$rows['image1']."
                ".$rows['image2']."
                ".$rows['image3']."
            </center>
          <p>   
              ".$rows['blogdata'].'</p>
          </p>
          
        <a href="blogs.php"> 
        <center>
        
          <input class="button" type="submit" name="submit" value="'.$rows["topic"].'" onsubmit="blogs.php">
        
        </center>
        </a>
        </div>
        ';
    }
  }
  ?>

</form>
</body>
</html>
