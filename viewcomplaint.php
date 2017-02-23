<?php
if(isset($_COOKIE['loginw']));
else
die("Unauthorised Access !!");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>View Complaints</title>
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
						<h2>Complains / Suggestions</h2>
						<span class="byline"></span>
					</header>
					<p>

<body>
<table width="100%" border="1">
    <tr>
    <td align=center><strong>complaint id</strong></td>
    <td align=center><strong>student name</strong></td>
    <td align=center><strong>room no.</strong></td>
    <td align=center><strong>complaint</strong></td>
    </tr>
    </body>

<?php
include "connect.php";


$h=$_COOKIE['IDw'];
 $sql="SELECT * FROM complaint WHERE hostel_id='$h'";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
   $sid=$row['filled_id'];
 $q=mysql_query("SELECT* FROM `login` WHERE `id`='$sid' AND hostel_id='$h'");
$data=mysql_fetch_assoc($q);
$name=$data['firstname'];
$room=$data['room_no'];


  ?>
        <tr>
        <td align=center><?php echo $row['complaint_id'] ?></td>

        <td align=center><?php echo $name ?></td>
        <td align=center><?php echo $room ?></td>

        <td align=center><?php echo $row['complaint'] ?></td>

        </tr>

        <?php
 }

 ?>
</table
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
