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
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hostel";
$q=$_POST['day'];

//mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server');
//mysql_select_db($dbname) or die('database selection problem');
$sql="SELECT * FROM attendence WHERE `date`='$q' AND hostel_id='$id' ORDER BY `room` ASC";
$result_set=mysql_query($sql);
echo"<table border='1' width=100%>
   <tr bgcolor='PURPLE'>
                <td align='center'><font color='WHITE'>ROOM.NO</td>
    <td align='center'><font color='WHITE'>DATE</td>
    <td align='center'><font color='WHITE'>NAME</td>
    <td align='center'><font color='WHITE'>ATTENDENCE</td>
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

echo"  <tr bgcolor=$c align='center'><td><font color='$f'>$r</td><td><font color='$f'>$d</td><td><font color='$f'>$name1</td><td><font color='$f'>$a</td></tr></font>";
}
echo'</table>';
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
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				HOSTEL MANAGEMENT SYSTEM
			</div>
		</div>


	</body>
</html>
