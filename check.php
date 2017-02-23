<?php
include ('connect.php');
$k=$_POST['username'];
$j=$_POST['password'];
$a=0;
$q1=mysql_query("SELECT* FROM `login` WHERE `universityroll`='$k' AND `password`='$j'");
if (mysql_num_rows($q1) OR isset($_COOKIE['login']))
{
  $q2=mysql_query("SELECT* FROM `login` WHERE `universityroll`='$k' AND `password`='$j'");
  $id=mysql_fetch_assoc($q2);
  $ide=$id['id'];
  setcookie('login',"true",time()+3600);
  setcookie('ID',"$ide",time()+3600);
  $a=1;
  echo "<script language='javascript'>window.location.href='a.php'</script>";
}
if ($a==0)
{echo "<br><br>Enter valid crediantals. <a href='index.php'>Click here to try again</a>";}
?>