<?php
  include "../Control/buymedicinecheck.php";
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

   <title>Buy Medicine</title>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
      <div>
      <left> <b><h1 style="color:red;">Buy Medicine</h1></b></left>
        
 
          Please Submit Your Prescription :  
      <input type="file" name="image"  width="50" height="30"><br><br>

     
            <input type="submit" name="add" value="Submit">
                     <input type="reset" name="reset" value="RESET">
                 
             <a href="Homepage.php">Back to previous page</a>
          
          
   </form>
</div>
</body>
</html>