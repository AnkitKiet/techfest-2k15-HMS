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

		<title>Login Successfull</title>
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
	<body>

	<!-- Header -->
		<div id="tweet">
			<div id="nav-wrapper">
				<!-- Nav -->
				<nav id="nav">
					<ul>
							<li class="active"><a href="index.php">Home</a></li>
						<li><a href="frontview.html">Gallery</a></li>
						<li><a href="left-sidebar.html">About Us</a></li>
							<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</div>
			<div class="container">

				<!-- Logo -->
				<div id="logo">
					<h1><a><font size=20>Hostel &nbspManagement &nbspSystem</font></a></h1>
					<span class="tag"></span>
				</div>
			</div>
		</div>
	<!-- Header -->

	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Hey! Warden
                                                                 <br>
                                                                 </h2>
							</header>
							<div class="row">
								<section class="6u">

								</section>
       <section class="6u">
								</section>
							</div>
						</section>

					</div>

					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2></h2>
								<span class="byline"></span>
							</header>
							     <p>
							     <table border="1" width="100%" height="100%">
							     <tr>
                                                             <td><a href="selectdate_att.php" class="btn">Mark Attendance </a></td><td><a href="intermediate.php" class="btn">View Attendance </a></td>
                                                             </tr>
                                                             <tr><td><br></td><td><br></td></tr>
                                                             <tr><td><br></td><td><br></td></tr>
                                                             <tr>
                                                             <tr><td><a href="update.php" class="btn">Update Attendance </a></td><td><a href="post_notice.php" class="btn">Post Notice</a></td>
                                                             <tr><td><br></td><td><br></td></tr>
                                                             <tr><td><br></td><td><br></td></tr>
                                                             </tr>
                                                             <td><a href="changewpas.php" class="btn">Change Password</a></td><td><a href="viewcomplaint.php" class="btn">View Complaints</a></td>
                                                             </tr>
                                                             <tr><td><br></td><td><br></td></tr>
                                                             <tr><td><br></td><td><br></td></tr>
                                                             <td><a href="register.php" class="btn">Register Student</a></td>
															 <td><a href="generate.php" class="btn">Generate Student List</a></td>
                                                             </tr>
                                                             </table>
                                                             </p>
						</section>
					</div>

				</div>
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