<!DOCTYPE html>
<html>
    <head>
        <title>Online Quiz System</title>

    </head>
    <body>
        <?php
            include "connection.php";
            ///$sql = "SELECT * FROM admin";
            ///$result = $conn->query($sql);
        ?>
        <?php
       /* if(mysqli_num_rows($result)>0){    ///admin table
            ?>
            <div class="table1">
            <table border="1">
                <tr>
                    <td>Admin ID</td>
                    <td>Username</td>
                    <td>Password</td>
                </tr>
                <?php
                $i=0;
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row["adminID"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["pass"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                }
                    ?>
            </table>
            <?php
        }
        else{
            echo "no result found";
        }
        ?>    
        </div>
        <br> <br>*/  ///nicher line remove
        ?>
        <?php
           $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
        ?>
        <?php
        if(mysqli_num_rows($result)>0){     ///user table
            ?>
            <div class="table2">
            <table border="1">
                <tr>
                    <td>User ID</td>
                    <td>Username</td>
                    <td>Password</td>
                </tr>
                <?php
                $i=0;
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row["userID"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["pass"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                }
                    ?>
            </table>
            <?php
        }
        else{
            echo "no result found";
        }
        ?>  
        <br> <br>  
        </div>

        <?php
           /* $sql = "SELECT * FROM questions";
            $result = $conn->query($sql);
        ?>
        <?php
        if(mysqli_num_rows($result)>0){   ///question table
            ?>
            <div class="table3">
            <table border="1">
                <tr>
                    <td>Question ID</td>
                    <td>Questions</td>
                    <td>Answer ID</td>
                </tr>
                <?php
                $i=0;
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row["quesID"]; ?></td>
                        <td><?php echo $row["question"]; ?></td>
                        <td><?php echo $row["ansID"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                }
                    ?>
            </table>
            <?php
        }
        else{
            echo "no result found";
        }
        ?>    
        </div>
        <br> <br>

        <?php
            $sql = "SELECT * FROM answers";
            $result = $conn->query($sql);
        ?>
        <?php
        if(mysqli_num_rows($result)>0){    ///answer table
            ?>
            <div class="table4">
            <table border="1">
                <tr>
                    <td>A ID</td>
                    <td>Answers</td>
                    <td>Answer ID</td>
                </tr>
                <?php
                $i=0;
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row["a_id"]; ?></td>
                        <td><?php echo $row["answer"]; ?></td>
                        <td><?php echo $row["ans_id"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                }
                    ?>
            </table>
            <?php
        }
        else{
            echo "no result found";
        }
        ?>    
        </div>
        <br><br>

        <?php
            $sql = "SELECT * FROM result";
            $result = $conn->query($sql);
        ?>
        <?php
        if(mysqli_num_rows($result)>0){   ///result table
            ?>
            <div class="table5">
            <table border="1">
                <tr>
                    <td>Result ID</td>
                    <td>User ID</td>
                    <td>Total Question</td>
                    <td>Attempted Question</td>
                    <td>Total Marks</td>


                </tr>
                <?php
                $i=0;
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row["resultID"]; ?></td>
                        <td><?php echo $row["userID"]; ?></td>
                        <td><?php echo $row["totalqs"]; ?></td>
                        <td><?php echo $row["attempted"]; ?></td>
                        <td><?php echo $row["marks"]; ?></td>

                    </tr>
                    <?php
                    $i++;
                }
                    ?>
            </table>
            <?php
        }
        else{
            echo "no result found";
        }
        ?>    
        </div>*/ ///nicher line remove
        ?> 

        <?php
        $conn->close();
        ?>

    </body>
</html>