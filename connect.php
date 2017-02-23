<?php
error_reporting(0);
$connect=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("hostel") or die(mysql_error());
?>