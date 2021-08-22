<?php
include('../model/db.php');


 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['firstname']) || empty($_POST['lastname']) )
 {
$error = "input given is invalid";
}


else
{
$connection = new db();
$conobj=$connection->OpenCon();

$dob=$_REQUEST["dob"];
$firstname=$_REQUEST["firstname"];
$lastname=$_REQUEST["lastname"];
$email=$_REQUEST["email"];
$address=$_REQUEST["address"];
$phone=$_REQUEST["phone"];
$password=$_REQUEST["password"];
$username=$_REQUEST["username"];
$gender="";

if(isset($_REQUEST["gender"]))
{
    $gender=$_REQUEST["gender"];
}



   
$userQuery=$connection->Patientupdate($conobj,"patient",$username,$firstname,$lastname,$password,$address,$dob,$gender,$phone,$email);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>