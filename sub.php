
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

		<title>view attendence</title>
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
		<div id="logo">
			<div id="nav-wrapper">
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.php"><font color="black">Home</font></a></li>
                                                <li><a href="right-sidebar.html"><font color="black">Mess Menu</font></a></li>
						<li><a href="http://www.kiet.edu/Virtualtour/web/frontview.html"><font color="black">Gallery</font></a></li>
						<li><a href="left-sidebar.html"><font color="black">About Us</font></a></li>
						<li><a href="logout.php"><font color="black">Logout</font></a></li>
					</ul>
				</nav>
			</div>
			<div class="container">

				<!-- Logo -->
				<div id="">
					<h1><a href=""></a></h1>
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
						<h2>Attendence</h2>
						<span class="byline"></span>    </center>
					</header>
<?php
$d=$_COOKIE['date'];
           $a='A';
           $p='P';
           foreach($_POST as $id)
             {  
               $q2=mysql_query("SELECT * FROM `attendence` WHERE date = '$d' AND student_id= '$id'") OR die("error");
                $r1=mysql_fetch_assoc($q2);
             $att=$r1['attendence'];

             if($att!=$p) {
               mysql_query("UPDATE `attendence` SET `attendence`='$p' WHERE date = '$d' AND student_id= '$id'");
           echo"<script>alert('successfully changed')</script>";
   echo "<script language='javascript'>window.location.href='b.php'</script>";
             }
           else

           if($att!=$a)
   {
           mysql_query("UPDATE `attendence` SET `attendence`='$a' WHERE date = '$d' AND student_id= '$id'");
           echo"<script>alert('successfully changed')</script>";
   echo "<script language='javascript'>window.location.href='b.php'</script>";
   }

          }

setcookie('date',"",time()-10000);
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
						<h2>Get in touch</h2>
						<span class="byline">Made By-Ankit Maurya<br>Anurag Dubey<br>Avi Aggarwal</span>
					</header>

				</section>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Designed By: Team HMS
			</div>
		</div>


	</body>
</html>
