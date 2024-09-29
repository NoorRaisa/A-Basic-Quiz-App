<?php
session_start();
include "../connection.php";
$quiz_category=$_GET["quiz_category"];
$_SESSION["quiz_category"]=$quiz_category;
$res=mysqli_query($conn,"SELECT * FROM category where name='$quiz_category'");
/*while($row=mysqli_fetch_array($res))
{
    $_SESSION["time"]=$row["time"];
}
$date=date("Y-m-d H:i:s");*/

$_SESSION["end_time"]=date("Y-m-d H:i:s",strtotime($date."+$_SESSION[time] minutes"));
$_SESSION["quiz_start"]="yes";
?>