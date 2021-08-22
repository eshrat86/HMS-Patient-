<?php
include('../model/db.php');


 $error="";

if (isset($_POST['add'])) {
if (empty($_FILES['image']['name']))
{
$error = "input given is invalid";
}

else
{
$connection = new db();
$conobj=$connection->OpenCon();
$images="../files/". $_FILES["image"]["name"];


$userQuery=$connection-> Addprescription($conobj,"buymedicine",$images);
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