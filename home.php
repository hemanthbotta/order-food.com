<?php

   include_once('header2.php');
    include("connection.php");
 ?>
    <div>
                   
   </div>
 
   <?php


?>
<!DOCTYPE html>
 <html>
  <head>
    <title>register</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.p-5{
  width: 701px;
  margin-left: 205px;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.cancelbtn {
     width: 25%;
  }
  span.psw {
  float: right;
  padding-top: 16px;
}

</style>
<script>
  function myFunction() {
  //Name Validation
  var name=document.getElementById("name").value;
    if(name==""){
      document.getElementById("name_error1").style.display="block";
    return false;
  }
  if(!/^[a-zA-Z]*$/g.test(name)){
    document.getElementById("name_error2").style.display="block";
    return false;
  }
  //Phone Number Validation
  var name=document.getElementById("number").value;
    if(name==""){
      document.getElementById("number_error1").style.display="block";
    return false;
  }
  if(/^[6789]\d{9}$/g.test(number)){
    document.getElementById("number_error2").style.display="block";
    return false;
  }
  //Email Validation
  var name=document.getElementById("email").value;
    if(name==""){
      document.getElementById("email_error1").style.display="block";
    return false;
  }
  if(!/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/g.test(email)){
    document.getElementById("email_error2").style.display="block";
    return false;
  }
  //Password Validation
  var pass1=document.getElementById("pass1").value;
  var pass2=document.getElementById("pass2").value;
    if(pass1==""){
      document.getElementById("pwd_error").style.display="block";
    return false;
  }
  if(pass2==""){
    document.getElementById("cpwd_error1").style.display="block";
    return false;
  }
  if(pass1!=pass2){
    document.getElementById("cpwd_error2").style.display="block";
    return false;
  }
 
function clear_name_err(){
  document.getElementById("name_error1").style.display="none";
  document.getElementById("name_error2").style.display="none";
}
function clear_number_err(){
  document.getElementById("number_error1").style.display="none";
  document.getElementById("number_error2").style.display="none";
}
function clear_email_err(){
  document.getElementById("email_error1").style.display="none";
  document.getElementById("email_error2").style.display="none";
}
function clear_pwd_err(){
  document.getElementById("pwd_error").style.display="none";
  
}
function clear_cpwd_err(){
  document.getElementById("cpwd_error1").style.display="none";
  document.getElementById("cpwd_error2").style.display="none";
}

</script>
</head>
<body class="bg-white">
<div>
                   <center><h1> REGISTER </h1></center>
</div>
  <div class="container mt-5">
    <div>
                     <form class="bg-warning p-5" method="GET" action="insert_user.php">
                        <div class="form-group">
            <label>Name: </label>
            <input type="text" id="name" placeholder="enter the name" class="form-control" onfocus="clear_name_err" name="fullname">
            <span style="color: red; display: none;" id="name_error1">Please Enter name</span>
            <span style="color: red; display: none;" id="name_error2">Please Enter valid name</span>
          </div>
          <div class="form-group">
            <label>Phone Number: </label>
            <input type="text" id="number" placeholder="enter the number" class="form-control" onfocus="clear_number_err" name="phone">
            <span style="color: red; display: none;" id="number_error1">Please Enter phone number</span>
            <span style="color: red; display: none;" id="name_error1">Please Enter valid phone number</span>
          </div>
          <div class="form-group">
            <label>Email: </label>
            <input type="text" id="email" placeholder="enter the email" class="form-control" onfocus="clear_email_err" name="email">
            <span style="color: red; display: none;" id="email_error1">Please Enter email</span>
            <span style="color: red; display: none;" id="email_error2">Please Enter valid email</span>
          </div>

          <div class="form-group">
            <label>UserName: </label>
            <input type="text" id="name" placeholder="enter the name" class="form-control" onfocus="clear_name_err" name="username">
            <span style="color: red; display: none;" id="name_error1">Please Enter name</span>
            <span style="color: red; display: none;" id="name_error2">Please Enter valid name</span>
          </div>

          <div class="form-group">
            <label>Password: </label>
            <input type="text" id="email" placeholder="enter the password" class="form-control" onfocus="clear_pwd_err" name="password">
            <span style="color: red; display: none;" id="pwd_error">Please Enter the password</span>
            
          </div>
          <div class="form-group">
            <label>Confirm Password: </label>
            <input type="text" id="email" placeholder="enter the password" class="form-control" onfocus="clear_cpwd_err" name="confirmpassword">
            <span style="color: red; display: none;" id="cpwd_error1">Please Confirm password</span>
            <span style="color: red; display: none;" id="cpwd_error2">Your password do not matches. Please check.</span>
            
          </div>
          
          
            
      <div class="form-group">
     <label>Address:</label><br>
     <textarea rows="4" cols="50" class="form-control" name="address">
     </textarea></div>
     <div><center><input type="submit" name="submit" value="Submit" onClick="location.href='home.php'"></center></div>
         
     <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

    <div class="container bg-warning" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onClick="location.href='webpage.php'">Cancel</button>
    
  </div>
  <div>
<span class="psw">If already register?<a href="login.php">click to login</a></span>
</div>
</form>
    </div>    
</div>
</body><br>
<br>

   <?php

include('footer.php');
?>