

<?php
if(isset($_COOKIE['loginw']))
{if(isset($_COOKIE['date']));
 else
 die("Time Out");
}
else
die("Unauthorised Access !!");
?>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hostel";
$d=$_COOKIE['date'];
$k=0;
$b[]=0;
          mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server');
          mysql_select_db($dbname) or die('database selection problem');

$flag1=1;
$h=$_COOKIE['IDw'];
$q1=mysql_query("SELECT * FROM attendence WHERE hostel_id=$h");
while($r=mysql_fetch_array($q1))
{$d1=$r['date'];
if(strcmp($d,$d1)==0)
$flag1=0;
}
if($flag1==1)
{
           $sql="SELECT * FROM login WHERE hostel_id='$h'";
           $result_set=mysql_query($sql);
           foreach($_POST as $id)
             {
               $b[$k++]=$id;
               $results=mysql_query("SELECT * FROM `login` WHERE `id` = '$id'");
               $res=mysql_fetch_assoc($results);
               $r=$res['room_no'];

               mysql_query("INSERT INTO attendence VALUES('','$d','$r','$id','P','$h')");
             }
          $k=0 ;
          while($row=mysql_fetch_array($result_set))
           {
             $ida=$row['id'];
             $flag=0;
             foreach($b as $q)
             if($q==$ida)
             $flag=1;
             if($flag==0)
             $a[$k++]=$ida;

           }
          foreach($a as $f)
          {
            $results=mysql_query("SELECT * FROM `login` WHERE `id` = '$f'");
            $res=mysql_fetch_assoc($results);
            $r=$res['room_no'];
            mysql_query("INSERT INTO attendence VALUES('','$d','$r','$f','A','$h')");
          }
setcookie('date',"",time()-10000);
  echo "<script>alert('attendence is successfully marked')</script><script language='javascript'>window.location.href='b.php'</script>";

}
else if($flag1==0)
{
  echo "<script>alert('You have already marked this day`s attendence')</script>";
    echo "<script language='javascript'>window.location.href='b.php'</script>";

}
?>