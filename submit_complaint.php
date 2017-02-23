<?php
include "connect.php";
$complaint=$_GET['complaint'];
$id=$_COOKIE['ID'];
$q=mysql_query("SELECT* FROM `login` WHERE `id`='$id'");
$data=mysql_fetch_assoc($q);
$hostelid=$data['hostel_id'];
if($complaint!='')
{
mysql_query("INSERT INTO `complaint` VALUES('','$id','$complaint','$hostelid')");
echo "<script>alert('Your complaint/suggetion is successfully Registered')</script><script language='javascript'>window.location.href='a.php'</script>";
}
else
echo "<script>alert('Please write something')</script>";
echo"<script language='javascript'>window.location.href='complaint.php'</script>";
?>
