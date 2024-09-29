<?php
    /*$servername = "localhost"; // Change to your database server
    $username = "root";
    $password = "";
    $dbname = "onlinequizsystem";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }*/
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"onlinequizsystem");
?>
<!DOCTYPE html>
<html>



<!---<body>
    <h2>Data from NewTable</h2>

    <?php
        // SQL query to retrieve data
        ///$sql = "SELECT * FROM NewTable";
        ///$result = $conn->query($sql);

        // Check if there are rows in the result set
        ///if ($result->num_rows > 0) {
            // Output data of each row
           /// while ($row = $result->fetch_assoc()) {
              ///  echo "ID " . $row["id"] . " - Name: " . $row["name"] . "<br>";
        
             ///}
       /// } 
       /// else {
         //   echo "0 results";
       // }

    // Close the connection
    //$conn->close();
    ?>

</body>--->

</html>