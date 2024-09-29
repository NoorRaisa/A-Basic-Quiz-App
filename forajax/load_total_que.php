<?php
session_start();
include "../connection.php";
$total_que=0;
$res1=mysqli_query($conn,"SELECT * FROM question where categoryname='$_SESSION[quiz_category]'");
$total_que=mysqli_num_rows($res1);
echo $total_que;
?>