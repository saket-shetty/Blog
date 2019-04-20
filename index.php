  <?php
  session_start();
  $_SESSION['varname'] = "post-it";
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Saket Shetty
  </title>
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' crossorigin='anonymous'>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style type="text/css">
body {
  background: #e2e1e0;
  text-align: center;
  margin-left: 5px;
  margin-right: 5px;
  margin-bottom: 5px;
}

.row{
  display: flex;
}

.col-sm-5{
  flex: 1;
}

@media (max-width: 768px){
  .row{
    display: block;
  }
}

.card{
  background: #fff;
  box-shadow: 0 3px 6px rgba(0,0,0,0.25), 0 3px 6px rgba(0,0,0,0.25);
  width: 100%;
  height: 100%;
  padding-bottom: 10px;
  margin-bottom: 10px;
}
.projects{
  box-shadow: 0 3px 6px rgba(0,0,0,0.25), 0 3px 6px rgba(0,0,0,0.25);
  text-align: left;
  padding-left: 10px;
  padding-right: 10px;
  background: #fff;
  align-content: top;
  width: 100%;
  height: 100%;
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

img{
  width: 40px;
  height: 40px;
}

</style>
</head>
<body>
  
  <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="blog.php">
  Blogs</a>
  <a href="/contact.php">Contact</a>
  </div>

  <div class="row">
      <div class="col-sm-5">
      <div class="card">
      <center>
      <p style="padding: 10px;font-size: 25px; font-family: 'Noto Sans JP', sans-serif;">Saket Shetty</p>

      <div style="margin-left: 10px; text-align: left;">
      <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Android Developer</p>
      <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Panvel</p>
      <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>shettysaket05@gmail.com</p>
      </div>
    </center>
    <hr>
      <div style="margin-left: 10px;text-align: left;">
      <p style="font-size: 25px; font-family: 'Noto Sans JP', sans-serif;">Skills</p>
      <p><i class="fab fa-android fa-fw w3-margin-right w3-large w3-text-teal"></i>Flutter</p>
      <p><i class="fab fa-java fa-fw w3-margin-right w3-large w3-text-teal"></i>Java (Native android app)</p>
      <p><i class="fab fa-html5 fa-fw w3-margin-right w3-large w3-text-teal"></i>Full Stack Web devlopment</p>
      </div>
    <hr>
      <div style="margin-left: 10px;text-align: left;">
        <p style="font-size: 25px; font-family: 'Noto Sans JP', sans-serif;">Contact</p>
        <p><i class="fab fa-github fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="https://www.github.com/saket-shetty">Github</a></p>
        <p><i class="fab fa-linkedin fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="https://www.linkedin.com/in/saket-shetty-5b4018159/">Linked in</a></p>
      </div>
  </div>
</div>


      <div class="col-sm-7">
      <div class="projects">
        <p style="font-size: 30px; font-family: 'Noto Sans JP', sans-serif;">
          <i class="fa fa-gears fa-fw w3-margin-right w3-xlarge w3-text-teal"></i>
        Projects</p>
        <p style="font-size: 25px; font-family: 'Noto Sans JP', sans-serif;">
        <a href="https://github.com/saket-shetty/Post-it">
        Post-it</a></p>
        <p style="font-size: 12px;">Post-it is a social media app which allows user to interact with each other from all around the world. The user can login with their social media like google and twitter. It uses UTC(universal time cordinate) technology so that time for every user will be same and changing device time will not affect it.
          <a href="https://github.com/saket-shetty/Post-it">project link</a>
        </p>

        <p style="font-size: 25px; font-family: 'Noto Sans JP', sans-serif;">
        <a href="https://github.com/saket-shetty/news-app">
        News-app</a></p>
        <p style="font-size: 12px;">News App is a real time news broadcasting app which uses News app which lets user to choose the news provider and topic. The News api provide data in json form so it is easy to retrieve data from it. The app is entirely made with flutter.&nbsp &nbsp &nbsp 
          <a href="https://github.com/saket-shetty/news-app">project link</a>
        </p>

        <p style="font-size: 25px; font-family: 'Noto Sans JP', sans-serif;">
        <a href="https://github.com/saket-shetty/stealth2">
        Stealth-app</a></p>
        <p style="font-size: 12px;">Stealth app is an android app which retrieves data from the android device and send it into database. The data includes SMS, Contact, Location, Call log etc. This app also won college level prize. The app will send data to the Firebase database as sson as event is triggered. It is using broadcast receiver.
          <a href="https://github.com/saket-shetty/stealth2">project link</a>
        </p>
        <hr>

      </div>
    </div>
</div>

<div id="social-media">
<h2>Contact / Social-Media</h2>
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