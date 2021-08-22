<?php
include('../model/db.php');


 $error="";

if (isset($_POST['add'])) {
if (empty($_POST['testname']))
{
$error = "input given is invalid";
}

else
{
$connection = new db();
$conobj=$connection->OpenCon();



$userQuery=$connection-> Addtest($conobj,"labtest",$_POST['testname']);
if($userQuery==TRUE)
{
  echo "data uploaded";
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>