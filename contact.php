<?php
$host="localhost";
$user="root";
$password="";
$db="demo";
mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST["email"]))
{
  $uname=$_POST['email'];
  $password=$_POST['pwd'];
  $sql="select * from loginform where user='".$uname."'AND Pass='".$password."'limit 1";
  $result=mysql_query($sql);

if(mysql_num_rows($result)==1){
  alert( "You have successfully logged in");

}
else {
  alert("You have entered wrong information");
}

}

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <script type="text/javascript" src="wiki/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="wiki/bs/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="wiki/style.css">
  <link rel="stylesheet"  href="wiki/bs/css/bootstrap.min.css">
  <title>Cognition </title>
</head>
<body>      
<div class="jumbotron" style="margin-bottom: 0px; margin-top: 10px;">
  <center><h1> Cognition</h1>
  <p style="font-family: century gothic"> Let's Gain Knowledge </p>

</center>
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
    <span class="navbar-toggler-icon"></span> 
  </button>
  <div class="collapse navbar-collapse" id="collapse_target">
<a class="navbar-brand" href="index.php"><img src="wiki/logo.png" height="50" width="50"></a>

  <span class="navbar-text">Cognition</span>
    
  </span>



  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="about.php">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Login</a>
    </li>

 
  </ul>
</div>
</nav>

<div class="container">
  <h2> Login</h2>
  <form method="POST" action="index.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit"  value="LOGIN"  class="btn btn-default">Submit</button>
  </form>
</div>
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 9736900;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<!-- End of LiveChat code -->
<br>
<br>
<br>
<br>
<footer>
    &copy; Cognition Inc. 2017 <br> All rights Reserved
    
  </footer>