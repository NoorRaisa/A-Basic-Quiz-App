<?php
session_start();
include "connection.php";
include "header.php";
?>

<div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

    <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
    
    <center>
    <h1>Select Category to See Leaderboard</h1>
    </center>
    <?php
        $res=mysqli_query($conn,"SELECT * FROM category");
        while($row=mysqli_fetch_array($res))
        {
            ?>
            <input type="button" class="btn btn-success form-control" value="<?php echo $row["name"];?>" style="margin-top: 10px; background-color:blue;color:white" onclick="see_leaderboard(this.value);">
            <?php
        }
    ?>
    </div>

</div>

<?php
    include "footer.php";
?>

<script type="text/javascript">
    function see_leaderboard(quiz_category)
    {
        window.location="leaderboard.php?quiz_category="+quiz_category;
    }
</script>

