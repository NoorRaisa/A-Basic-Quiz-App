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
$id=$_GET["id"];
$res=mysqli_query($conn,"SELECT * from category where id=$id");
while($row=mysqli_fetch_array($res))
{
    $category=$row["name"];
}
?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Quiz</h1>
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
                                    <div class="card-header"><strong>Edit Category</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="name" class=" form-control-label">New Quiz Category</label><input type="text"  placeholder="Category Name" class="form-control" name="category" value="<?php echo $category; ?>"></div>
                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Update Category" class="btn btn-success" </div>



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
include "footer.php";
if(isset($_POST["submit1"]))
{
    
    mysqli_query($conn,"UPDATE category set name='$_POST[category]' where id=$id") or die(mysqli_error($conn));
    ?>
    <script type="text/javascript">
        window.location="category.php";

    </script>
    <?php
}
?>
</body>

</html>