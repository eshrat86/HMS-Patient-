<?php
include "../model/db.php";
$connection=new db();
$conobj=$connection->OpenCon();

$Search=$connection->ShowAll($conobj,"doctor");

if ($Search->num_rows > 0) {

    // output data of each row
    while($row = $Search->fetch_assoc()) {

      echo "Doctor Name : ".$row["doctorname"]."<br>";
      echo "Designation : ".$row["designation"]."<br>";
      echo "Code No : ".$row["codeno"]."<br>";
      echo "Doctor Type : ".$row["doctortype"]."<br>";
      echo "Department : ".$row["department"]."<br>";
      echo "Phone no : ".$row["phoneno"]."<br>";
      echo "Address : ".$row["address"]."<br>";
      $image=$row['image'];
      echo "<img src='$image'width=50px >";

    }
}

?>


  <h5><a href="Homepage.php">Back</a></h5>