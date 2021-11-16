
<!DOCTYPE html>
 <html>
  <head>
    <title>home</title>
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
  width: 500px;
  margin-left: 315px;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.cancelbtn {
     width: 100%;
     padding-top: 5px;
    height: 35px;
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


function clear_pwd_err(){
  document.getElementById("pwd_error").style.display="none";
  
}

}



</script>
</head>
<body class="bg-transparent">
<div>
                   <center><h1> LOGIN </h1></center>
</div>
  <div class="container mt-5">
    <div id="login">
      <form class="bg-warning p-5" method="POST" action="validate_login.php">
        
            <div class="form-group">
            <label>UserName: </label>
            <input type="text" id="username" placeholder="enter the name" class="form-control" onfocus="clear_name_err" name="username">
            <span style="color: red; display: none;" id="name_error1">Please Enter name</span>
            <span style="color: red; display: none;" id="name_error2">Please Enter valid name</span>
          </div>
          
          <div class="form-group">
            <label>Password: </label>
            <input type="text" id="email" placeholder="enter the password" class="form-control" onfocus="clear_pwd_err" name="password">
            <span style="color: red; display: none;" id="pwd_error">Please Enter the password</span>
            
          </div>
          
          
          
      
     <div><center><input type="submit" name="submit" value="submit" onClick="location.href='https://www.paradisefoodcourt.in/restaurants-in-vizag.html'"></center></div>
         
     <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

    <div class="container bg-warning" style="background-color:#f1f1f1">
    <div class="row">
      <div class="col-sm-6>">
    <button type="button" class="cancelbtn" onClick="location.href='webpage.php'" >Cancel</button>
    <p id="demo"></p>
</div>
<div class="col-sm-6">
    <span class="psw">Forgot <a href="#">password?</a></span>
</div>
<div>
<span class="psw">If not login?<a href="register.php">click to register</a></span>
</div>
</div>
  </div>

  </div>


      </form>
    </div>
</div>
</body>
</html>