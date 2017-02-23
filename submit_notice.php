<?php
if(isset($_COOKIE['loginw']));
else
die("Unauthorised Access !!");
?>
<?php
include "connect.php";
$notice=$_GET['notice'];
if($notice!='')
{
mysql_query("INSERT INTO `notice` VALUES('','$notice')") or die();
echo "<script>alert('Your notice is successfully posted')</script><script language='javascript'>window.location.href='b.php'</script>";
}
else
echo "<script>alert('Please write something')</script><script language='javascript'>window.location.href='b.php'</script>";
?>