
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Design</title>
  
  <style>
    .bgcolor{
      background-color: black;
    }
    
.dropdown-menu{
  background-color: white;
}
.dropdown-item{
  color:red;font-family: 'Roboto Slab', serif;
}
.dropdown-item:hover{
  color:white;background-color:orangered;
}
.active{color:red!important}

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

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="text1">Paradise</div><br><br>
      <div class="text2">Well known for feeding the minds, bodies and soul of our guests through an attitude of serving tasty food. Paradise Restaurant has brought the global approach of dinning with focus on authentic Indian food as well as serving Punjabi, Chinese and Mexican.</div>
    </div>
    <div class="col-sm-6">
      <img src="Images/ChickenNoodles.png" width="100%">
    </div>
  </div>
  <div class="topup"><a href="Menu.html"><button class="btn btn-warning">Menu</button></a></div><br>
  <div class="row">
    <div class="col-sm-6">
      <img src="Images/NoodlesFork.jpeg" width="100%">
    </div>
    <div class="col-sm-6">
    <div class="text3">Paradise Since 1953</div>
    <div class="text2">The world-famous Paradise brand has its origins in a small Canteen and a Café in a cinema theatre called Paradise in Secunderabad in the Year 1953.The tradiational and culture of flavours close to their art and history of making chefs at place.</div><br><br>
    <div class="text-center topup"><a href="about.html"><button class="btn btn-warning">ABOUT US</button></a></div><br>
  </div>
</div>
</div>

<div class="row" style="background-color: cornsilk;">
  <div class="col-sm-6">
    <div class="text3 text4" >Menu</div><br><br>
    <div class="text2 text4" >Well known for feeding the minds, bodies and soul of our guests through an attitude of serving tasty food. Paradise Restaurant has brought the global approach of dinning with focus on authentic Indian food as well as serving Punjabi, Chinese and Mexican.</div><br><br><br><br>
    <div class="container row">
    <div class="col-sm-6"><img src="Images/Mealsimg.png" width= "50px" class="img"><span class="textimg">Meals</span></div><br>
    <div class="col-sm-6"><img src="Images/soupimg.png" width= "50px" class="img"><span class="textimg">Soups</span></div><br>
    </div><br><br><br><br>
    <div class="container row">
    <div class="col-sm-6"><img src="Images/Noodlesimg.png" width= "50px" class="img"><span class="textimg">Noodles</span></div><br>
    <div class="col-sm-6"><img src="Images/SpringRolls.png" width= "50px" class="img"><span class="textimg">Spring Rolls</span></div><br>
    </div><br><br><br><br>
    <div class="container row">
      <div class="col-sm-6"><img src="Images/BiryanisImg.png" width= "50px" class="img"><span class="textimg">Biryanis</span></div><br>
      <div class="col-sm-6"><img src="Images/FastFoods.png" width= "50px" class="img"><span class="textimg">Fast Foods</span></div><br>
      </div><br><br><br><br>
      <div class="topup"><a href="Menu.html"><button class="btn btn-warning">SEE FULL MENU</button></a></div><br>
  </div>
  <div class="col-sm-6">
    <img src="Images/PlatesMenu.jpeg" width="100%">
  </div>
</div><br>

<div class="container">
  <h1 style="color: wheat; margin-left: 100px;">Gallery</h1>
  <div class="row">
    <div class="col-sm-6">
      
      <img src="Images/ParadiseBiryani.jpeg" width="100%">
    </div>
    <div class="col-sm-6">
      <div class="container row">
        <div class="col-sm-6"><img src="Images/dining.jpeg" width= "100%" ></div><br>
        <div class="col-sm-6"><img src="Images/Dining2.jpeg" width= "100%" ></div><br>
        </div>
        <div class="container row">
          <div class="col-sm-6"><img src="Images/BiryaniChickenPiece.jpeg" width= "100%" ></div><br>
          <div class="col-sm-6"><a href="Gallery.html"><img src="Images/Dining3.jpeg" width= "100%" style="opacity: 0.5;"><div class="content">View Gallery</div></a></div>
          
          </div>
  </div>
</div>
<div class="container row">
  <div class="col-sm-6" style="color: red;font-size: 49px;">Ratings from Customers</div>
  <div class="col-sm-6 imgcontent"><img src="Images/RatingStar.png" width= "25px" class="img2"><img src="Images/RatingStar.png" width= "25px" class="img2"><img src="Images/RatingStar.png" width= "25px" class="img2"><img src="Images/RatingStar.png" width= "25px" class="img2"><img src="Images/RatingStar.png" width= "25px" class="img2">
    <div class="imgcontent">Average customer rating 4.2 (245 votes)</div>
  </div>

</div>
</div>
<!--FormValidation-->
<div class="container mt-5">
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
<?php
  include('Footer.php');
?>

</body>
</html>
