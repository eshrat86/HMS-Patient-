function get(id){
  return document.getElementById(id);
}

function validateGender(){
  var gender = document.getElementsByName("gender");
  var checked = false;
  for(var i=0;i<gender.length;i++){
      if(gender[i].checked){
          checked = true;
          break;
      }
  }
  return checked;
}


function validateForm() {
  var username = document.getElementById("username").value;
  var firstname = document.getElementById("firstname").value;
  var lastname = document.getElementById("lastname").value;
  var password = document.getElementById("password").value;
  var dob = document.getElementById("dob").value;
  var address = document.getElementById("address").value;
  var gender = document.getElementById("gender").value;
  var phoneno = document.getElementById("phoneno").value;
  var email = document.getElementById("email").value;
  
  var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = patt.test(email);
  
  if (userame == "" ) {
   document.getElementById("errorname").innerHTML="Please fill out fullname";
    //return false;
  }
  else{
    document.getElementById("errorname").innerHTML="";
  }
   if (firstame == "" ) {
   document.getElementById("errorfirstname").innerHTML="Please fill out firstname";
    //return false;
  }
  else{
    document.getElementById("errorfirstname").innerHTML="";
  }
   if (lastname == "" ) {
   document.getElementById("errorlastname").innerHTML="Please fill out lastname";
    //return false;
  }
  else{
    document.getElementById("errorlastname").innerHTML="";
  }
   if (dob == "" ) {
   document.getElementById("errordob").innerHTML="Please fill out dob";
    //return false;
  }
  else{
    document.getElementById("errordob").innerHTML="";
  }
  if (address == "" ) {
    document.getElementById("erroraddress").innerHTML="Enter your address";
     //return false;
   }
   else{
     document.getElementById("erroraddress").innerHTML="";
   
   }

  if(!res)
  {
    document.getElementById("errormail").innerHTML="Email format is not correct";
    //return false; 
  }
  else
  {
    document.getElementById("errormail").innerHTML="";
  }

 if (password.length<6) 
 {
   document.getElementById("errorpassword").innerHTML="Password contains 6 char";
   // return false;
  }
  else 
  {
    document.getElementById("errorpassword").innerHTML="";
  }

   if(validateGender()==false)
   {
     document.getElementById("errorgender").innerHTML="Gender must requried";
    // return false;
   }
   else{
    document.getElementById("errorgender").innerHTML="";
   }

   


}