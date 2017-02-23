<?php
if(isset($_COOKIE['login']));
else
die("Unauthorised Access !!");
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
						<li><a href="http://www.kiet.edu/Virtualtour/web/frontview.html">Gallery</a></li>
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
								<h2>Welcome <?php
                                                                include "connect.php";
                                                                $id=$_COOKIE['ID'];
                                                                $q2=mysql_query("SELECT* FROM `login` WHERE `id`='$id'");
                                                                $data=mysql_fetch_assoc($q2);
                                                                $name=$data['firstname'];
                                                                echo "$name";
                                                                $hid=$data['hostel_id'];
                                                                $q=mysql_query("SELECT* FROM `hostels` WHERE `hostel_id`='$hid'");
                                                                $data1=mysql_fetch_assoc($q);
                                                                $hname=$data1['name'];
                                                                $room=$data['room_no'];
                                                                $year=$data['year'];
                                                                $course=$data['course'];
                                                                $q1=mysql_query("SELECT* FROM `course` WHERE `course_id`='$course'");
                                                                $data3=mysql_fetch_assoc($q1);
                                                                $cour=$data3['course'];
                                                                 ?>
                                                                 <br>
                                                                 </h2>
							</header>
							<div class="row">
								<section class="6u">
									<ul class="default">
										<li><?php echo "Your Hostel:<strong> $hname</strong>" ?></li>
										<li><?php echo "Room no.:<strong> $room</strong>" ?></li>
										<li>Room Mate:&nbsp<?php
                                                                                $q3=mysql_query("SELECT* FROM `login` WHERE `room_no`='$room' AND `hostel_id`='$hid' AND id!='$id'");

                                                                                while($data2=mysql_fetch_assoc($q3))
                                                                                $na=$data2['firstname'];
                                                                                echo "<strong>$na</strong>";

                                                                                ?>
                                                                                </li>
										<li><?php echo "Course:<strong> $cour</strong>" ?> </li>
										<li><?php echo "Year:<strong> $year</strong>" ?></li>
									</ul>
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
                                                             <td><a href="select_date_student_view.php" class="btn">View Attendance </a></td><td><a href="complaint.php" class="btn">Submit Complaint </a></td>
                                                             </tr>
                                                             <tr><td colspan=2>&nbsp</td></tr>
                                                               <tr>
                                                             <td colspan=2 ><a href="changespas.php" class="btn">Change Password </a></td>
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
