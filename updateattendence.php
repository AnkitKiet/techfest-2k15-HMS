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

		<title>Update Attendence</title>
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
						<h2>Update</h2>
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
$sql="SELECT * FROM attendence WHERE `date`='$q' AND `hostel_id`='$h' ORDER BY `room` ASC";
$result_set=mysql_query($sql);
echo"<table border='1' width=100%>
   <tr bgcolor='PURPLE'>
   <td><font color='WHITE'>UPDATE</td>
                <td><font color='WHITE'>ROOM.NO</td>
    <td><font color='WHITE'>DATE</td>
    <td><font color='WHITE'>NAME</td>
    <td><font color='WHITE'>ATTENDENCE</td>
    </tr> ";

while($row=mysql_fetch_array($result_set))
{
  $c='Grey';
  $f='white';
  $ida=$row['student_id'];
  $r=$row['room'];
  $results=mysql_query("SELECT * FROM `login` WHERE `id` = '$ida'");
  $res=mysql_fetch_assoc($results);
  $name1=$res['firstname']." ". $res['lastname'];
  $d=$row['date'];
  $a=$row['attendence'];



  if($a=="P")
 {
  $c='White';
  $f='Black';
 }

echo"  <tr bgcolor=$c ><td><form action='sub.php' method='post'><input type='checkbox' name=$ida value=$ida>$name<BR></td><td><font color='$f'>$r</td><td><font color='$f'>$d</td><td><font color='$f'>$name1</td><td><font color='$f'>$a</td></tr></font>";

}
echo"</table><input type='submit' class='btn' value='submit'></form>";
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
