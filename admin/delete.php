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
$id=$_GET["id"];
mysqli_query($conn,"DELETE FROM category where id=$id");
?>

<script type="text/javascript">
    window.location="category.php";
</script>