<?php
   include "../control/Logincheck.php";
   if(isset($_SESSION["username"]))
      {
         header("location:../view/Homepage.php");
      }
?>
<!DOCTYPE html>
<html>
   <head>
   <style>
input[type=text] {
  width: 100%;
  padding: 5px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
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
   <title>Login Page</title>
</head>
<body>
<form action=""  method="post">
</center><b><h2 style="color:green;">Login</b></h2></center>
<div>
         <table>
            <tr>
               <td><h3><i>Username</i></h3></td>
               <td><input type="text" name="username"></td>
               
            </tr>
            
            <tr>
               <td><h3><i>Password</i><h3></td>
               <td><input type="password" name="password"></td>
            </tr>

            <tr>
               <td></td>
               <td>
                  <h3>
                     <input type="submit" name="submit" value="LOGIN">
                     &emsp;<a href="RegistrationForm.php">Sign up</a> 
                  </h3>
               </td>
               <td>&emsp;<a href="Mainpage.php">Back to previous page</a></td>
            </tr>
            <?php echo $error; ?>
         </table>
</div>

   </form>
</body>
</html>
