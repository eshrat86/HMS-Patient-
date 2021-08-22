<?php
include('../model/db.php');


 $error="";

if (isset($_POST['submit'])) {
if (empty($_POST['username']) ||empty($_POST['firstname']) ||empty($_POST['lastname']) ||empty($_POST['password']) || empty($_POST['dob']) ||empty($_POST['address']) ||empty($_POST['gender'])  ||empty($_POST['phoneno'])  ||empty($_POST['email'])|| empty($_FILES['image']['name']))
{
$error = "input given is invalid";
}

else
{
$connection = new db();
$conobj=$connection->OpenCon();
$images="../files/". $_FILES["image"]["name"];


$userQuery=$connection-> Addpatient($conobj,"patient",$_POST['username'],$_POST['firstname'],$_POST['lastname'],$_POST['password'],$_POST['dob'],$_POST['address'],$_POST['gender'],$_POST['phoneno'],$_POST['email'],$images);
if($userQuery==TRUE)
{
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $images)) {
       echo "data uploaded.";
    } else {
        echo "Sorry, data was not uploaded.";
    }
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>