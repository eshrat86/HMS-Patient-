<?php
include('../model/db.php');


 $error="";

if (isset($_POST['add'])) {
if (empty($_POST['doctorname']) ||empty($_POST['designation']) ||empty($_POST['codeno']) ||empty($_POST['doctortype']) || empty($_POST['department']) ||empty($_POST['phoneno']) ||empty($_POST['address'])  || empty($_FILES['image']['name']))
{
$error = "input given is invalid";
}

else
{
$connection = new db();
$conobj=$connection->OpenCon();
$images="../files/". $_FILES["image"]["name"];


$userQuery=$connection-> Adddoctor($conobj,"doctor",$_POST['doctorname'],$_POST['designation'],$_POST['codeno'],$_POST['doctortype'],$_POST['department'],$_POST['phoneno'],$_POST['address'],$images);
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