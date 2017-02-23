<?php

require("connect.php");
$extract =mysql_query("SELECT * FROM notice");
while ($row = mysql_fetch_assoc($extract))
{
 $id = $row['notice_id'];
}
$j=1;
for($i=$id;$i>$id-5;$i--)
{
$extract =mysql_query("SELECT * FROM notice WHERE notice_id='$i'");
$row = mysql_fetch_assoc($extract);
echo $j++.".";
echo $row['notice'];
echo'<br>';
}


?>