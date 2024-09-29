<?php
session_start();
include "../connection.php";
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
$id=$_GET["id"]; ///quesid
$id1=$_GET["id1"];  ///categoryid
mysqli_query($conn,"DELETE from question where id=$id");
?>
        <script type="text/javascript">
        alert("Question Deleted Successfully");
        window.location="add_question.php?id=<?php echo $id1;?>"; ////categoryid 
        </script>
    <?php
?>