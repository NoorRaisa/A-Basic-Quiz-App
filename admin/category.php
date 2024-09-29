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
?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Add Quiz</h1>
            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">



        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form name="form1" action="" method="post">
                        <div class="card-body">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header"><strong>Add Category</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="name" class=" form-control-label">New Quiz Category</label><input type="text"  placeholder="Category Name" class="form-control" name="category"></div>
                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Add Category" class="btn btn-success" </div>



                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Quiz Categories</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Category Name</th>
                                                    <!--<th scope="col">Time</th>-->
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count=0;
                                                $res=mysqli_query($conn,"SELECT * FROM category ");
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    $count=$count+1;
                                                    ?>
                                                    <tr>
                                                    <th scope="row"><?php echo $count;?></th>
                                                    <td><?php echo $row["name"];?></td>
                                                    <td><a href="edit_quiz.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                                                    <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>


                                                </tr>
                                                    <?php
                                                }
                                                ?>
                                                
                                               
                                                
                                            </tbody>
                                        </table>
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
include "footer.php";
if(isset($_POST["submit1"]))
{
    
    mysqli_query($conn,"INSERT INTO category VALUES (NULL,'$_POST[category]')") or die(mysqli_error($conn));
    ?>
    <script type="text/javascript">
        alert("Category Added Successfully");
        window.location.href=window.location.href;
    </script>
    <?php
}
?>
</body>

</html>