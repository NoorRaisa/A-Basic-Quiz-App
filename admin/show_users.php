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
?>

<div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>All Users</h1>
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
                            <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="text-align: center;">User ID</th>
                                                    <th scope="col" style="text-align: center;">User Name</th>
                                                    <!--<th scope="col">Time</th>-->
                                                    <th scope="col" style="text-align: center;">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count=0;
                                                $res=mysqli_query($conn,"SELECT * FROM users ");
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    ///$count=$count+1;
                                                    ?>
                                                    <tr>
                                                    <th scope="row" style="text-align: center;"><?php echo $row["userID"];?></th>
                                                    <td style="text-align: center;"><?php echo $row["username"];?></td>
                                                    <td style="text-align: center;"><a href="delete_user.php?username=<?php echo $row["username"]; ?>">Delete</a></td>

                                                </tr>
                                                    <?php
                                                }
                                                ?>
                                                
                                               
                                                
                                            </tbody>
                                        </table>

                            </div>
                        </div> 

                    </div>
                    <!--/.col-->



                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div>

    <?php
    include "footer.php";
    ?>
</body>

</html>