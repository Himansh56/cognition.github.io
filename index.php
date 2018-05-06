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
<div class="jumbotron">
<center>
<form class="sch" action="" method="get">
	<input type="text" name="Search" value="" id="transcript" placeholder="Speak" /> 
	
	<img onclick="startDictation()" src="//i.imgur.com/cHidSVu.gif"> 
	<input type ="image" value="submit" src="wiki/Search.png" height="50" width="40">
	<br>
  <div class="hubba"><div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <br>
    <br>
    <br>
    <br>    

<!--</form>
<form id="labnol" method="get" action="Search">
  <div class="speech">
    <input type="text" name="q" id="transcript" placeholder="Speak" />
    <img onclick="startDictation()" src="//i.imgur.com/cHidSVu.gif" />
  </div>
</form>-->
<script>
  function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-IN";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>
</div>
</div>
<br>
<hr class="hrf">

<br>

<div class="back">
<div class="col">
  <div class="textCol">
<?php
if
 ( @$_GET['Search']) {
$api_url= "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&titles=".ucwords($_GET['Search'])."&redirects=true";
$api_url =str_replace(' ','%20', $api_url);
if ($data =json_decode(@file_get_contents($api_url))){
	foreach ($data->query-> pages as $key=>$val) {
		$pageId =$key;
		break;

	}
		$content = $data -> query -> pages-> $pageId-> extract;
		header('content-Type:text/html; charset=utf-8');
		echo "$content";

} 
else {
	echo ' No results found.....';
}

 }
 ?>
</div>
<br>

<table cellpadding="0" cellspacing="0" width="250px" border="1">
  <th> MOST VISITED PAGES </th>
  <tr>

  <td>
    
    <li><a href="http://localhost/index.php?Search=Harry+Potter&x=0&y=0"> Harry potter</a></li>
  </td>
</tr>
  <tr>
  <td>
    <li><a href="http://localhost/index.php?Search=elon+musk&x=0&y=0"> Elon Musk</a></li>
  </td>
</tr>
  <tr>
  <td>
    <li><a href="http://localhost/index.php?Search=Wikipedia&x=0&y=0"> Wikipedia</a></li>
  </td>
</tr>
  <tr>
  <td>
    <li><a href="http://localhost/index.php?Search=Mahatma+Gandhi&x=0&y=0"> Mahatma Gandhi</a></li>
  </td>
</tr>
  <tr>
  <td>
    <li><a href="http://localhost/index.php?Search=nelson+mandela&x=0&y=0"> Nelson Mandela</a></li>
  </td>
</tr>
  <tr>
  <td>
    <li><a href="http://localhost/index.php?Search=intel&x=0&y=0"> Intel</a></li>
  </td>
</tr>

  </ol>
</table>
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
<br><br><br>
<footer>
    &copy; Cognition Inc. 2017 <br> All rights Reserved
    
  </footer>