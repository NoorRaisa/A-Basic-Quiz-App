<?php
session_start();
include "header.php";
include "../connection.php";
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
$id = $_GET["id"];  ///from add_edit_qs
$category = '';
$res = mysqli_query($conn, "SELECT * from category where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $category = $row["name"];
}
?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Add Question Inside <?php echo "<font color='red'>" . $category . "</font>"; ?></h1>
            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">

                        <div class="col-lg-12">
                            <form name="form1" action="" method="post"">
                                <div class="card">
                                    <div class="card-header"><strong>Add New Questions with Text Options</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="name" class=" form-control-label">Add Question</label><input type="text" placeholder=" Add Question" class="form-control" name="question"></div>
                                        <div class="form-group"><label for="name" class=" form-control-label">Add Option1</label><input type="text" placeholder=" Add First Option" class="form-control" name="opt1"></div>
                                        <div class="form-group"><label for="name" class=" form-control-label">Add Option2</label><input type="text" placeholder=" Add Second Option" class="form-control" name="opt2"></div>
                                        <div class="form-group"><label for="name" class=" form-control-label">Add Option3</label><input type="text" placeholder=" Add Third Option" class="form-control" name="opt3"></div>
                                        <div class="form-group"><label for="name" class=" form-control-label">Add Option4</label><input type="text" placeholder=" Add Fourth Option" class="form-control" name="opt4"></div>
                                        <div class="form-group"><label for="name" class=" form-control-label">Add Answer</label><input type="text" placeholder=" Add Correct Answer" class="form-control" name="answer"></div>



                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Add Question" class="btn btn-success"> 
                                        </div>
                                    </div>
                                </div>
                            
                        </div>

                       <!-- <div class="col-lg-6">
                            
                                <div class="card">
                                    <div class="card-header"><strong>Add New Questions with Image Options</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="name" class=" form-control-label">Add Question</label><input type="text" placeholder=" Add Question" class="form-control" name="fquestion"></div>
                                        <div class="form-group"><label for="name" class=" form-control-label">Add Option1</label><input type="file"  class="form-control" name="fopt1" style="padding-bottom: 38px;"></div>
                                        <div class="form-group"><label for="name" class=" form-control-label">Add Option2</label><input type="file"  class="form-control" name="fopt2" style="padding-bottom: 38px;"></div>
                                        <div class="form-group"><label for="name" class=" form-control-label">Add Option3</label><input type="file"  class="form-control" name="fopt3" style="padding-bottom: 38px;"></div>
                                        <div class="form-group"><label for="name" class=" form-control-label">Add Option4</label><input type="file"  class="form-control" name="fopt4" style="padding-bottom: 38px;"></div>
                                        <div class="form-group"><label for="name" class=" form-control-label">Add Answer</label><input type="file"   class="form-control" name="fanswer" style="padding-bottom: 38px;"></div>



                                        <div class="form-group">
                                            <input type="submit" name="submit2" value="Add Question" class="btn btn-success"> 
                                        </div>
                                    </div>
                                </div>
                            
                        </div>-->
                        </form>
                        


                    </div>
                </div>


            </div>
            <!--/.col-->



        </div>

        <div class="row">    <!---qs show-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Questions</th>
                                <th>Option1</th>
                                <th>Option2</th>
                                <th>Option3</th>
                                <th>Option4</th>
                                <th>Correct Answer</th>
                                <th>Edit</th>
                                <th>Delete</th>


                            </tr>
                        
                        <?php
                        $res=mysqli_query($conn,"SELECT * from question where categoryname='$category' order by question_no asc");

                        while($row=mysqli_fetch_array($res))
                        {
                            echo "<tr>";
                            echo "<td>";  echo $row["question_no"]; echo "</td>";
                            echo "<td>";  echo $row["question"]; echo "</td>";
                            echo "<td>";  

                            /*if(strpos($row["opt1"],'option_images/') !== false)
                            {       
                                ?>
                                <img src="<?php echo $row["opt1"] ?>" height="50" width="50">
                                <?php
                            }*/
                           // else
                            //{
                                echo $row["opt1"];
                            //}
                            echo "</td>";

                            echo "<td>";  

                            /*if(strpos($row["opt2"],'option_images/') !== false)
                            {       
                                ?>
                                <img src="<?php echo $row["opt2"] ?>" height="50" width="50">
                                <?php
                            }*/
                            //else
                            //{
                                echo $row["opt2"];
                            //}
                            echo "</td>";

                            echo "<td>";  

                            /*if(strpos($row["opt3"],'option_images/') !== false)
                            {       
                                ?>
                                <img src="<?php echo $row["opt3"] ?>" height="50" width="50">
                                <?php
                            }*/
                            ///else
                            //{
                                echo $row["opt3"];
                            //}
                            echo "</td>";

                            echo "<td>";  

                            /*if(strpos($row["opt4"],'option_images/') !== false)
                            {       
                                ?>
                                <img src="<?php echo $row["opt4"] ?>" height="50" width="50">
                                <?php
                            }*/
                            //else
                            //{
                                echo $row["opt4"];
                            //}
                            echo "</td>";

                            echo "<td>";  

                            /*if(strpos($row["answer"],'option_images/') !== false)
                            {       
                                ?>
                                <img src="<?php echo $row["answer"] ?>" height="50" width="50">
                                <?php
                            }
                            else
                            {*/
                                echo $row["answer"];
                           // }
                            echo "</td>";


                            echo "<td>";
                            /*if(strpos($row["opt4"],'option_images/') !== false)
                            {       
                                ?>
                                <a href="edit_option_images.php?id=<?php echo $row["id"];?>  &id1=<?php echo $id;?>">Edit</a>
                                <?php
                            }
                            else
                            {*/
                                ?>
                                <a href="edit_option.php?id=<?php echo $row["id"];?> &id1=<?php echo $id;?>">Edit</a>
                                <?php
                            ///}

                            echo "</td>";

                            echo "<td>";
                            ?>
                            <a href="delete_option.php?id=<?php echo $row["id"];?> &id1=<?php echo $id;?>">Delete</a>
                            <?php
                            echo "</td>";



                            echo "</tr>";
                        }
                        ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
</div>

<?php
if (isset($_POST["submit1"])) {
    $loop = 0;
    $count = 0;
    $res = mysqli_query($conn, "SELECT * from question where categoryname='$category' order by id asc") or die(mysqli_error($conn));

    $count = mysqli_num_rows($res);
    if ($count = 0) {
    } else {
        while ($row = mysqli_fetch_array($res)) {
            $loop = $loop + 1;
            mysqli_query($conn, "UPDATE question set question_no='$loop' where id=$row[id]");
        }
    }

    $loop = $loop + 1;
    mysqli_query($conn, "INSERT into question values (NULL,'$loop','$_POST[question]','$_POST[opt1]','$_POST[opt2]'
    ,'$_POST[opt3]','$_POST[opt4]','$_POST[answer]', '$category')") or die(mysqli_error($conn));
?>
    <script type="text/javascript">
        alert("Question Added Successfully");
        window.location.href = window.location.href;
    </script>
<?php

}
?>



<?php
include "footer.php";
?>
</body>

</html>