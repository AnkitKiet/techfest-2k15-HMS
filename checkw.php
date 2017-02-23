<?php
include ('connect.php');
$k=$_POST['usernamew'];
$j=$_POST['passwordw'];
$a=0;
$q1=mysql_query("SELECT* FROM `admin` WHERE `username`='$k' AND `password`='$j'");
if (mysql_num_rows($q1) OR isset($_COOKIE['loginw']))
{
  $q2=mysql_query("SELECT* FROM `admin` WHERE `username`='$k' AND `password`='$j'");
  $hid=mysql_fetch_assoc($q2);
  $id=$hid['hostel_id'];
  setcookie('IDw',"$id",time()+3600);
  setcookie('loginw',"true",time()+3600);
  $a=1;
  echo "<script language='javascript'>window.location.href='b.php'</script>";
}
if ($a==0)
{echo "<br><br>Enter valid crediantals. <a href='index.php'>Click here to try again</a>";}
?>