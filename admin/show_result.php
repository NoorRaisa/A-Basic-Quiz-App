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
$name=$_GET["name"];
?>

<div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

    <div class="col-lg-12 " style="min-height: 500px; background-color: white;">
    <center>
    <h1>All Exams Result</h1>
    <br>
    </center>
    <?php
    $count=0;
    $res=mysqli_query($conn,"SELECT id,total_question,correct_answer,wrong_answer,users.userID,attempts.username
    ,category,totalmarks from attempts INNER JOIN users on attempts.username=users.username where category='$name' ORDER BY attempts.id desc");
    $count=mysqli_num_rows($res);
    if($count==0)
    {
        ?>
        <center>
        <h1>No results Found</h1>
        </center>
        <?php
    }
    else
    {
        echo "<table class='table table-bordered'>";
        echo "<tr >";
        echo "<th style='text-align:center;'>"; echo "Quiz Number"; echo "</th>";
        echo "<th style='text-align:center;'>"; echo "Total Question"; echo "</th>";
        echo "<th style='text-align:center;'>";echo " Correct Answer";echo "</th>";
        echo "<th style='text-align:center;'>"; echo "Wrong Answer";echo"</th>";
        echo "<th style='text-align:center;'>";echo " UserID";echo "</th>";
        echo "<th style='text-align:center;'>";echo " Username";echo "</th>";
        echo "<th style='text-align:center;'>";echo " Category";echo "</th>";
        echo "<th style='text-align:center;'>";echo "Total Marks";echo "</th>";
        echo "</tr>";
        while($row=mysqli_fetch_array($res))
        {
        echo "<tr>";
        echo "<td style='text-align:center;'>"; echo $row["id"]; echo "</td>";
        echo "<td style='text-align:center;'>"; echo $row["total_question"]; echo "</td>";
        echo "<td style='text-align:center;'>";echo $row["correct_answer"];echo "</td>";
        echo "<td style='text-align:center;'>"; echo $row["wrong_answer"];echo"</td>";
        echo "<td style='text-align:center;'>";echo  $row["userID"];echo "</td>";
        echo "<td style='text-align:center;'>";echo $row["username"];echo "</td>";
        echo "<td style='text-align:center;'>";echo $row["category"];echo "</td>";
        echo "<td style='text-align:center;'>";echo $row["totalmarks"];echo "</td>";
        echo "</tr>";
        }
        echo "</table>";
    }
    ?>
    </div>

</div>

<?php
    include "footer.php";
?>