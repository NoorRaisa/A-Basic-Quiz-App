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
<!---exam select for edit-->
        <div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Select Quiz Category for Add and Edit Questions</h1>
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
                                                    <th scope="col">#</th>
                                                    <th scope="col">Category Name</th>
                                                    <!--<th scope="col">Time</th>-->
                                                    <th scope="col">Select</th>

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
                                                    <!--<td><?php echo $row["time"];?></td>-->
                                                    <td><a href="add_question.php?id=<?php echo $row["id"]; ?>">Select</a></td>


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