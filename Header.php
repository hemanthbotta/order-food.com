<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> </title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!--Font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous">
  
	<link rel="stylesheet" href="CSS/CssStyle.css">
    <style>
        .bgcolor{
      background-color: black;
    }
        .bg2{
            background-color: black;width: 100%;height:150px;
        }
        .content2{
            color: wheat;font-size: 60px;margin-top: 200px;margin-left: 200px;
        }
        .text6{
            color: orangered;font-size: 60px;margin-top: 100px;margin-left: 100px;
        }
        .text5{
            color: orange;font-size: large;margin-left: 100px;
        }
        
    </style>
    <script>
        window.onscroll = function() {scrollFunction()};
    function scrollFunction(){
      if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
        document.getElementById("header").style.width="100%";
			  document.getElementById("header").style.left="0%";
			  document.getElementById("header").style.top="0%";
			  document.getElementById("header").style.transition="0.5s";
			  
        
      }
      else{
        document.getElementById("header").style.width="80%";
        
			  document.getElementById("header").style.left="10%";
			  document.getElementById("header").style.top="4%";
			  document.getElementById("header").style.transition="0.5s";
			  
         
      }
    }

    </script>
</head>

<body class="bgcolor">
	<div id="header">
        <div class="container">
      <nav class="navbar navbar-expand-md ">
        <a class="navbar-brand" href="#"><img src="https://www.paradisefoodcourt.in/images/logos/Paradise-Logo3.png" alt ="paradise logo" style="width:100px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="webpage.php">Home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="About.php">AboutUs</a>
            </li>
          
          <li class="nav-item">
            <a class="nav-link" href="Menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact.php">ContactUs</a>
          </li>    
          </ul>
        </div>  
      </nav>
      </div>
      </div>


</body>
</html>