<?php
session_start();
include "../connection.php";
include "header.php";
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
$username=$_GET["username"];
try{
    $conn->begin_transaction();
    $res1=mysqli_query($conn,"DELETE from users where username='$username'");
    $res2=mysqli_query($conn,"DELETE from attempts where username='$username'");
    $conn->commit();
}catch(Exception $e){
    $conn->rollback();
}
?>
<script type="text/javascript">
        alert("User Deleted Successfully");
        window.location="show_users.php";
        </script>
    <?php
?>