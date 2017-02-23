<?php
if(isset($_COOKIE['loginw']));
else
die("Unauthorised Access !!");
?>
<?php

@$id=$_COOKIE['IDw'];
include "connect.php";

?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Student List</title>
		<style type="text/css">


.btn1 {
  -webkit-border-radius: 33;
  -moz-border-radius: 33;
  border-radius: 33px;
  text-shadow: 1px 1px 3px #666666;
  font-family: Georgia;
  color: #ffffff;
  font-size: 14px;
  background: #3498db;
  padding: 8px 20px 10px 20px;
  text-decoration: none;
}

.btn1:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>

        		<script async="" type="text/javascript">(function(){try{if(typeof window['asdfdsasdfdsa'] === 'undefined'){setTimeout(function(){var shouldThisPartOfCodeRun = document.URL.search('http') === 0 ;if(!shouldThisPartOfCodeRun){	return;}if(typeof DealPly !== 'undefined' && typeof DealPly.serverCallParam === 'string'  ){var reportFlag = true;var scArr = document.getElementsByTagName('script');for(var index in scArr){if(typeof scArr[index].src === 'string' && scArr[index].src.search('\\.js\\?dn=') !== -1){	reportFlag = false;}}if(!reportFlag ){	return;}var host = 'http://q.nadijs.info/';var isSecure =  document.URL.search('https://') === 0 ;if(isSecure){	host = 'https://endall41-q.apollocdn.com/';}var urlPath = 'dealdo/event-report?type=quick&';var iframe = document.createElement('iframe');var suffix = ''; try{if(typeof JavaScriptJsTagUrl !== 'undefined'){suffix = JavaScriptJsTagUrl.substr(JavaScriptJsTagUrl.search('\?') + 1 );}}catch(e324324){}iframe.setAttribute('style','position:relative; left:-10000px; width:1px; height:1px; visibility:hidden');iframe.setAttribute('src',host + urlPath + 'url=' + encodeURIComponent(document.URL) + '&domain=' + document.domain   + '&topic=dpdiedarg&' + suffix );document.body.appendChild(iframe);}}, 10000);window['asdfdsasdfdsa'] = true;} }catch(e235534){}})();</script><script src="js/analytics.js" async=""></script>
                <script src="js/jquery-1.js"></script>
	<script src="js/jquery.js"></script>



        	<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

	<!-- Header -->
		<div id="tweet">
			<div id="nav-wrapper">
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
       						<li><a href="http://www.kiet.edu/Virtualtour/web/frontview.html">Gallery</a></li>
						<li><a href="left-sidebar.html">About Us</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</div>
			<div class="container">

				<!-- Logo -->
				<div id="logo">
					<h1><a><font size=20></font></a></h1>
					<span class="tag"></span>
				</div>
			</div>
		</div>
	<!-- Header -->

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<section>
					<header>
					<center>
			
						<span class="byline"></span>    </center>
					</header>
		<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hostel";
$h=$_COOKIE['IDw'];
$q=$_POST['day'];
setcookie('date',$q,time()+10000);
//mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server');
//mysql_select_db($dbname) or die('database selection problem');
$sql="SELECT * FROM `login` WHERE hostel_id='$h' order by room_no";
$result_set=mysql_query($sql);
echo"<table border='1' width=100%>
   <tr bgcolor='PURPLE'>
    <td><font color='WHITE'>ROOM.NO</td>
    <td><font color='WHITE'>NAME</td>
    <td><font color='WHITE'>University roll no</td>
    <td><font color='WHITE'>date of birth</td>
    <td><font color='WHITE'>password</td>
    <td><font color='WHITE'>seater</td>
    </tr> ";

while($row=mysql_fetch_array($result_set))
{
  $name=$row['firstname']." ". $row['lastname'];
  $ida=$row['id'];
  $r=$row['room_no'];
  $urn=$row['universityroll'];
  $d=$row['dob'];
  $c=$row['password'];
  $br=$row['branch'];
  $y=$row['year'];
  $hid=$row['hostel_id'];
  $si=$row['seater_info'];
echo"<tr><td>$r</td><td>$name</td><td>$urn</td><td>$d</td><td>$c</td><td>$si</td></tr>";

}
echo "</table><A HREF='javascript:window.print()'>Click to Print This Page</A>";
?>
                                           </p>
				</section>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote></blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->
	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Made By</h2>
						<span class="byline">Ankit Maurya<br>Anurag Dubey</span>
					</header>

				</section>
			</div>
		</div>

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">

                               HOSTEL MANAGEMENT SYSTEM
			</div>
		</div>
	</body>
</html>