<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hms";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function Patientcheck($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

 //add function

 function Addpatient($conn,$table,$username,$firstname,$lastname,$password,$dob,$address,$gender,$phoneno,$email,$image)
 {
$result = $conn->query("INSERT INTO $table VALUES('$username','$firstname','$lastname','$password','$dob','$address','$gender','$phoneno','$email','$image')");
 return $result;
 }

 function Addtest($conn,$table,$testname)
 {
$result = $conn->query("INSERT INTO $table VALUES('$testname')");
 return $result;
 }

 function Addprescription($conn,$table,$image)
 {
$result = $conn->query("INSERT INTO $table VALUES('$image')");
 return $result;
 }


 function Addappointment($conn,$table,$patientname,$age,$date,$address,$gender,$doctorname,$image)
 {
$result = $conn->query("INSERT INTO $table VALUES('$patientname','$age','$date','$address','$gender','$doctorname','$image')");
 return $result;
 }
 function Adddoctor($conn,$table,$doctorname,$designation,$codeno,$doctortype,$department,$phoneno,$address,$image)
 {
$result = $conn->query("INSERT INTO $table VALUES('$doctorname','$designation','$codeno','$doctortype','$department','$phoneno','$address','$image')");
 return $result;
 }

//ShowAll  function
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
 //search function
 function Searchpatient($conn,$table,$username)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND username='". $username."'");
    return $result;
 }
//  //update function
 function patientupdate($conn,$table,$username,$firstname,$lastname,$password,$address,$dob,$gender,$phoneno,$email)
{
      $sql = "UPDATE $table SET username='$username', firstname='$firstname',lastname='$lastname',password='$password',address='$address',dob='$dob',gender='$gender',phoneno='$phoneno',email='email' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>