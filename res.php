<?php
session_start();
include "connection.php";
include "header.php";
$queno=$_GET["questionno"];

?>


<div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

    <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
    
        <?php
        $correct=0;
        $wrong=0;
        if(isset($_SESSION["answer"][$queno]))
        {
            for($i=1;$i<=($queno);$i++)
            {
                $answer="";
                $res=mysqli_query($conn,"SELECT * FROM question where categoryname='$_SESSION[quiz_category]' && question_no=$i");
                while($row=mysqli_fetch_array($res))
                {
                    $answer=$row["answer"];
                }
                if(isset($_SESSION["answer"][$i]))
                {
                    if($answer==$_SESSION["answer"][$i])
                    {
                        $correct=$correct+1;
                    }
                    else
                    {
                        $wrong=$wrong+1;
                    }
                }
                else
                {
                    $wrong=$wrong+1;
                }
            }
        }
        $count=0;
        $res=mysqli_query($conn,"SELECT * FROM question where categoryname='$_SESSION[quiz_category]'");
        $count=mysqli_num_rows($res);
        $wrong=$count-$correct;
        $res=mysqli_query($conn,"SELECT userID from users where username='$_SESSION[username]'");
        $total=$correct ;
        $sql="INSERT INTO attempts(id,total_question,correct_answer,wrong_answer,username,category,totalmarks) values (NULL,$count,$correct,$wrong,'$_SESSION[username]','$_SESSION[quiz_category]',$total)" or die(mysqli_error($conn));
        if(mysqli_query($conn,$sql))
    {
        ///echo "New records created succesfully";
    }
    else
    {
        echo "error in inserting data" . mysqli_error($conn);
    }
        
        echo "<br>";echo "<br>";
        echo "<center>";
        echo "<h4 style='color:red'>Total Questions="."$count</h4>";
        echo "<br>";
        echo "<h4 style='color:red'>Correct Answer="."$correct</h4>";
        echo "<br>";
        echo "<h4 style='color:red'>Wrong Answer="."$wrong</h4>";
        echo "</center>";

        ?>
    </div>

</div>




<?php
    include "footer.php";
?>