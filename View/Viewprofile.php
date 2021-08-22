<?php

session_start(); 
include "../control/searchpatient.php";
include('../control/updatecheck.php');



if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location:../View/Login.php"); // Redirecting To Home Page
}

?>




<!DOCTYPE html>
<html>
<body>


<left> <b><h3 style="color:green;">Profile page<h3></b></left>

<br><br>
<?php
$User="";
$username="";
$radio1=$radio2=$radio3=$password=$address="";
$phone=$email=$firstname=$lastname=$dob="";
$connection = new db();
$conobj=$connection->OpenCon();
//

//$searchQuery=$connection->searc
if(isset($_POST['Search']))
{
  $User=$_REQUEST['username'];
  $userQuery=$connection->Searchpatient($conobj,"patient",$User);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc())
     {
      $username=$row["username"];
      $firstname=$row["firstname"];
      $lastname=$row["lastname"];
      $password=$row["password"];
      $address=$row["address"];
      $dob=$row["dob"];
      $email=$row["email"];
      $phone=$row["phoneno"];
     
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}
     }
      
  } 

  else {
    echo "0 results";
  }
}






?>
<head>
   <style>
input[type=text] {
  width: 30%;
  padding: 5px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: lightgreen;
}

div{
  background-color: lightyellow;
  
  width: 600px;
  padding-left: 3px;
  border: 20px solid green;
  margin: 0px;

}
</style>
<form action='' method='post'>
<div>

<input type='hidden' name='username' value="<?php echo $username; ?>" >
First Name: <input type='text' name='firstname' value="<?php echo $firstname; ?>" ><br><br>
Last Name : <input type='text' name='lastname' value="<?php echo $lastname; ?>" ><br><br>
Password : <input type='text' name='password' value="<?php echo $password; ?>" ><br><br>
email : <input type='text' name='email' value="<?php echo $email; ?>" ><br><br>
Address: <textarea rows="5" cols="30" name="address"> <?php echo $address; ?> </textarea><br><br>
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other <br><br>




DOB:</td>
 <input type="text" name="dob" value="<?php echo $dob; ?>" ><br><br>
 Phone</td>
 <input type="text" name="phone" value="<?php echo $phone; ?>" ><br><br>


     <input name='update' type='submit' value='Update'>  <br><br>

     <?php echo $error; ?>

<a href="../View/Homepage.php">Back </a>

<a href="../Control/logout.php"> logout</a>
</div>
</body>
</html>