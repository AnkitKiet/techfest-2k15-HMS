<?php
if(isset($_COOKIE['login']))
{
  echo "<script language='javascript'>window.location.href='a.php'</script>";
}
else
if(isset($_COOKIE['loginw']))
{
  echo "<script language='javascript'>window.location.href='b.php'</script>";
}

?>
<!DOCTYPE HTML>

<html>
	<head>
	<style type="text/css">


.btn {
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

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>

		<title>WELCOME TO HMS</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body class="homepage">


		<div id="tweet">
			<div id="nav-wrapper">

				<nav id="nav">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="frontview.html">Gallery</a></li>
						<li><a href="left-sidebar.html">About Us</a></li>
					</ul>
				</nav>
			</div>
			<div class="container">

				<!-- Logo -->
				<div id="logo">
					<h1><a>KIET</a></h1>
					<span class="tag">Hostel Management System</span>
				</div>
			</div>
		</div>

	<!-- Featured -->
		<div id="featured">
			<div class="row">
					<section class="4u">
						<table border="1">
<th><font size=5  face="System" color="BLACK"><u>STUDENT LOGIN</u></th></font>
<tr>
<td>
<br>
<form action='check.php' method='POST'>
<font size=4>Username: <input type = "text" name="username" placeholder="University roll no">
<br><br>
Password: <input type = "password" name="password" placeholder="password">
<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type = "submit" class="btn" value = "Login">

</font>
</form>
</td>
</tr>
</table>


                                                					</section>
					<section class="4u">

						<table border="1" width="330" height="200">

<th><font size=5 face="System" color="BLACK"><u>WARDEN LOGIN</u></th></font>
<tr>
<td>
<br>
<form action='checkw.php' method='POST'>
<font size=4>Username: <input type = "text" name="usernamew" placeholder="name">
<br><br>
Password: <input type = "password" name="passwordw" placeholder="password">
<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type = "submit" name="submitw" class="btn" value = "Login">
</font>
</form>
</td>
</tr>
</table>

					</section>
					<section>
<table border="1" width="300">
<th><font size=5 face="System" color="BLACK"><u>NOTICE</u></th></font>
<tr>
<td>
<marquee direction="up" onmouseover="stop();"  onmouseout="start();">
<p align=left><font size=3 color="BROWN"><?php
include 'notice.php';
?></font>   </marquee>
</p></td>
</tr>
</table>

</section>

				</div>
			</div>
		</div>


	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>

				</section>
			</div>
		</div>

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Made By</h2>
						<span class="byline">Ankit Maurya<br>Anurag Dubey<BR>Avi Aggarwal</span>
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