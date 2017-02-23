<?php
if(isset($_COOKIE['login']));
else
die("Unauthorised Access !!");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Attendence</title>
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
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hostel";
$from=$_POST['from'];
$to=$_POST['to'];

mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server');
mysql_select_db($dbname) or die('database selection problem');
  $ida=$_COOKIE['ID'];
  $results=mysql_query("SELECT * FROM `login` WHERE `id` = '$ida'");
  $res=mysql_fetch_assoc($results);
  $name1=$res['firstname']." ". $res['lastname'];

           echo "<font size=5><CENTER>Attendence for <B>$name1</b><CENTER><BR></font>";
           echo"<table border='1' WIDTH=100%>
                <tr bgcolor='PURPLE' align=center>
                <td><font color='WHITE'>DATE</td>
                <td><font color='WHITE'>ATTENDENCE</td>
                </tr> ";
     while(strcmp($from,$to)<=0 && strcmp($from,date("Y-m-d"))<=0)
       {
            $sql="SELECT * FROM attendence WHERE `date`='$from' AND `student_id`='$ida'";
            $result_set=mysql_query($sql) OR die("Query failed") ;
            $row=mysql_fetch_array($result_set);
            $c='Grey';
            $f='white';
            $a=$row['attendence'];

              if($a=="P")
             {
              $c='White';
              $f='Black';
             }

            echo"  <tr bgcolor=$c align=center ><td><font color='$f'>$from</td><td><font color='$f'>$a</td></tr></font>";
            $from=strtotime("+1 day",strtotime("$from"));
            $from=date("Y-m-d",$from);
}
           echo "</table>";
?>
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
