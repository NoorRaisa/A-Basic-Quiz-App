<?php
include "header.php";
include "../connection.php";
$id = $_GET["id"];
$id1 = $_GET["id1"];


$question = "";
$opt1 = "";
$opt2 = "";
$opt3 = "";
$opt4 = "";
$answer = "";

$res = mysqli_query($conn, "SELECT * from question where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $question = $row["question"];
    $opt1 = $row["opt1"];
    $opt2 = $row["opt2"];
    $opt3 = $row["opt3"];
    $opt4 = $row["opt4"];
    $answer = $row["answer"];
}
?>

<div class="breadcrumbs">
    <div class="col-sm-12">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Update Question with Image Options</h1>
            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form name="form1" action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="col-lg-12">

                                <div class="card ">
                                    <div class="card-header"><strong>Add New Questions with Image Options</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="name" class=" form-control-label">Question</label><input type="text" placeholder=" Add Question" class="form-control" name="fquestion" value="<?php echo $question;?>"></div>
                                        <div class="form-group"><img src="<?php echo $opt1 ?>" height="50" width="50"><br><label for="name" class=" form-control-label">Add Option1</label><input type="file" class="form-control" name="fopt1" style="padding-bottom: 38px;"></div>
                                        <div class="form-group"><img src="<?php echo $opt2 ?>" height="50" width="50"><br><label for="name" class=" form-control-label">Add Option2</label><input type="file" class="form-control" name="fopt2" style="padding-bottom: 38px;"></div>
                                        <div class="form-group"><img src="<?php echo $opt3 ?>" height="50" width="50"><br><label for="name" class=" form-control-label">Add Option3</label><input type="file" class="form-control" name="fopt3" style="padding-bottom: 38px;"></div>
                                        <div class="form-group"><img src="<?php echo $opt4 ?>" height="50" width="50"><br><label for="name" class=" form-control-label">Add Option4</label><input type="file" class="form-control" name="fopt4" style="padding-bottom: 38px;"></div>
                                        <div class="form-group"><img src="<?php echo $answer ?>" height="50" width="50"><br><label for="name" class=" form-control-label">Add Answer</label><input type="file" class="form-control" name="fanswer" style="padding-bottom: 38px;"></div>



                                        <div class="form-group">
                                            <input type="submit" name="submit2" value="Update Question" class="btn btn-success">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>

            </div>
            <!--/.col-->



        </div>
    </div><!-- .animated -->
</div><!-- .content -->
</div>
<?php
if (isset($_POST["submit2"])) {
    $opt1 = $_FILES["fopt1"]["name"];
    $opt2 = $_FILES["fopt2"]["name"];
    $opt3 = $_FILES["fopt3"]["name"];
    $opt4 = $_FILES["fopt4"]["name"];
    $answer = $_FILES["fanswer"]["name"];
    $tm = md5(time());


    if ($opt1 != "") {
        $dst1 = "./option_images/" . $tm . $opt1;
        $dst_db1 = "option_images/" . $tm . $opt1;
        move_uploaded_file($_FILES["fopt1"]["tmp_name"], $dst1);

        mysqli_query($conn,"UPDATE question set question='$_POST[fquestion]' ,opt1='$dst_db1' where id=$id");
    }

    if ($opt2 != "") {
        $dst2 = "./option_images/" . $tm . $opt2;
        $dst_db2 = "option_images/" . $tm . $opt2;
        move_uploaded_file($_FILES["fopt2"]["tmp_name"], $dst2);

        mysqli_query($conn,"UPDATE question set question='$_POST[fquestion]' ,opt2='$dst_db2' where id=$id");
    }

    if ($opt3 != "") {
        $dst3 = "./option_images/" . $tm . $opt3;
        $dst_db3 = "option_images/" . $tm . $opt3;
        move_uploaded_file($_FILES["fopt3"]["tmp_name"], $dst3);

        mysqli_query($conn,"UPDATE question set question='$_POST[fquestion]' ,opt3='$dst_db3' where id=$id");
    }

    if ($opt4 != "") {
        $dst4 = "./option_images/" . $tm . $opt4;
        $dst_db4 = "option_images/" . $tm . $opt4;
        move_uploaded_file($_FILES["fopt4"]["tmp_name"], $dst4);

        mysqli_query($conn,"UPDATE question set question='$_POST[fquestion]' ,opt4='$dst_db4' where id=$id");
    }

    if ($answer != "") {
        $dst5 = "./option_images/" . $tm . $answer;
        $dst_db5 = "option_images/" . $tm . $answer;
        move_uploaded_file($_FILES["fanswer"]["tmp_name"], $dst5);

        mysqli_query($conn,"UPDATE question set question='$_POST[fquestion]' ,answer='$dst_db5' where id=$id");
    }
    mysqli_query($conn,"UPDATE question set question='$_POST[fquestion]'  where id=$id");


    ?>
        <script type="text/javascript">
        alert("Question Updated Successfully");
        window.location="add_question.php?id=<?php echo $id1;?>";
        </script>
    <?php
}
?>
<?php
include "footer.php";
?>
</body>

</html>