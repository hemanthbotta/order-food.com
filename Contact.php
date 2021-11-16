
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AboutUs</title>

  
    <style>
       
        .parallax {
  /* The image used */
  background-image: url("Images/Dishes.jpeg");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.a{
  color:white;text-decoration:none;
}
    </style>
    <script>
      

    //Form Validation Java Script
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
}
    </script>
</head>

<body>
<?php
  include('Header.php');
?>
<br>
	<div class="bg2">
        <div class="content2">CONTACT US</div>
    </div>
    
  <!--FormValidation-->
<div class=" mt-5" style="background-color: wheat;">
    <div>
      <form class="bg-white p-5">
        <div class="form-group">
          <label>Name: </label>
          <input type="text" id="name" placeholder="enter the name" class="form-control" onfocus="clear_name_err">
          <span style="color: red; display: none;" id="name_error1">Please Enter name</span>
          <span style="color: red; display: none;" id="name_error2">Please Enter valid name</span>
        </div>
        <div class="row">
          <div class="col-sm-6">
            
          
          <div class="form-group">
            <label>Email: </label>
            <input type="text" id="email" placeholder="enter the email" class="form-control" onfocus="clear_email_err">
            <span style="color: red; display: none;" id="email_error1">Please Enter email</span>
            <span style="color: red; display: none;" id="email_error2">Please Enter valid email</span>
          </div>
          <div class="form-group">
            <label>Subject: </label>
            <input type="text" id="name" placeholder="enter the Subject" class="form-control" >
          </div>
          
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Phone Number: </label>
              <input type="text" id="number" placeholder="enter the number" class="form-control" onfocus="clear_number_err">
              <span style="color: red; display: none;" id="number_error1">Please Enter phone number</span>
              <span style="color: red; display: none;" id="name_error1">Please Enter valid phone number</span>
            </div>
            
         
      <div class="form-group">
     <label>Message:</label><br>
     <textarea rows="4" cols="50" class="form-control">
     </textarea></div><br>
     
          </div>
        </div>
        <div class="container btn-warning text-center btncontent">Send a Message</div>
        </div>
      </form>
    </div>

    <div class="bg2">
        <div class="text-center" style="color: cornsilk;">Reservation</div>
        <div class="text-center" style="color: cornsilk;font-size: 70px;">Book a table</div>
        <div class="container btn-danger text-center " style="width: 300px;height: 50px;padding-top: 10px;color: cornsilk;" onClick="location.href='home.php'">Make a Reservation</div>
    </div><br><br>
  <?php
    include('Footer.php');
  ?>
</body>
</html>
