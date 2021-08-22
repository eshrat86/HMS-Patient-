<?php
  include "../Control/appointmentcheck.php";
   if(isset($_SESSION["firstname"]))
      {
         header("location: ");
      }
?>
<!DOCTYPE html>
<html>
<head>
   <style>
input[type=text] {
  width: 50%;
  padding: 5px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
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
  
  width: 700px;
  padding-left: 5px;
  border: 20px solid green;
  margin: 03px;

}
</style>

   <title>Appointment</title>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
      <div>
      <left> <b><h1 style="color:red;">Appointment</h1></b></left>
        
               <b>Patient Name</b>
               <input type="text" name="patientname"><br><br>
               <b>Age</b>
               <input type="text" name="age"><br><br>
               <b>Date</b>
               <input type="text" name="date"><br><br>
               <b>Address</b>
               <textarea name="address" rows="3" cols="20"></textarea><br> 
            

            <b>Gender</b>
              <br>
               <input type="radio" id="male" name="gender" value="male">
               <label for="male">Male</label><br>
               <input type="radio" id="female" name="gender" value="female">
               <label for="female">Female</label><br>
               <input type="radio" id="others" name="gender" value="others">
               <label for="others">Others</label><br>
               
         
          <br>
          <b>Doctor Name</b>
               <input type="text" name="doctorname"><br><br>
          Image 
      <input type="file" name="image"  width="50" height="30"><br><br>

     
            <input type="submit" name="add" value="Submit">
                     <input type="reset" name="reset" value="RESET">
                 
             <a href="Homepage.php">Back to previous page</a>
          
          
   </form>
</div>
</body>
</html>