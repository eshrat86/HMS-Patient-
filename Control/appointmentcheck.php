<?php
include('../model/db.php');


 $error="";

if (isset($_POST['add'])) {
if (empty($_POST['patientname']) ||empty($_POST['age']) ||empty($_POST['date']) ||empty($_POST['address']) || empty($_POST['gender']) ||empty($_POST['doctorname']) || empty($_FILES['image']['name']))
{
$error = "input given is invalid";
}

else
{
$connection = new db();
$conobj=$connection->OpenCon();
$images="../files/". $_FILES["image"]["name"];


$userQuery=$connection-> Addappointment($conobj,"appointment",$_POST['patientname'],$_POST['age'],$_POST['date'],$_POST['address'],$_POST['gender'],$images,$_POST['doctorname']);
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