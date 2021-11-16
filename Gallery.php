
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
.col-sm-4{
	padding: 10px ;
  }
  #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

.a{
  color:white;text-decoration:none;
}
    </style>
    <script>
    
//ZoomIn ZoomOut Javascript
    function get_big_image()
            {
               var width=document.getElementById("img_id").width="500";
               var height=document.getElementById("img_id").height="500";

               var w=width=50;
               var h=height=50;
               if(w>500 && h>500) {
                   alert("too big cannot displayed");
               }
               else{
                   document.getElementById("img_id").width=w;
                   document.getElementById("img_id").height=h;
               }
            }
            function get_normal_image()
            {
                var width2=document.getElementById("img_id").width="200";
                var height2=document.getElementById("img_id").height="200";

                var w2=width2=20;
                var h2=height2=20;
                if(w<200 && h<200) {
                   alert("too small cannot displayed");
               }
               else{
                   document.getElementById("img_id").width2=w2;
                   document.getElementById("img_id").height2=h2;
               }
            }

//Modal
            // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
    </script>
</head>

<body>
<?php
  include('Header.php');
?>
      <br>
	<div class="bg2">
        <div class="content2">Gallery</div>
    </div>
    <div class="container" style="background-color: cornsilk;">
        <div class="row">
            <div class="col-sm-4"><div onmouseover="get_big_image()" onmouseleave="get_normal_image()"><img id="myImg" src="Images/ChickenNoodles.png" width="100%" height="350px" >
                <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>
             </div></div>
            <div class="col-sm-4"><div onmouseover="get_big_image()" onmouseleave="get_normal_image()"><img id="myImg" src="Images/paneer-tikka.jpeg" width="100%" height="350px">
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div></div></div>
            <div class="col-sm-4"><div onmouseover="get_big_image()" onmouseleave="get_normal_image()"><img id="myImg" src="Images/ChickenSoup.jpeg" width="100%" height="350px">
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div></div></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><div onmouseover="get_big_image()" onmouseleave="get_normal_image()"><img id="myImg" src="Images/ParadiseBiryani.jpeg" width="100%" height="350px">

            <!-- The Modal -->
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div></div></div>
        <div class="col-sm-4"><div onmouseover="get_big_image()" onmouseleave="get_normal_image()"><img id="myImg" src="Images/rolls.jpeg" width="100%" height="350px">
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div></div>
        </div>
        <div class="col-sm-4"><div onmouseover="get_big_image()" onmouseleave="get_normal_image()"><img id="myImg" src="Images/Strawberry Cocktail.jpg" width="100%" height="350px">
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div></div></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><div onmouseover="get_big_image()" onmouseleave="get_normal_image()"><img id="myImg" src="Images/BiryaniChickenPiece.jpeg" width="100%" height="350px">
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div></div></div>
        <div class="col-sm-4"><div onmouseover="get_big_image()" onmouseleave="get_normal_image()"><img id="myImg" src="Images/ChilliChicken.jpeg" width="100%" height="350px">
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div></div></div>
        <div class="col-sm-4"><div onmouseover="get_big_image()" onmouseleave="get_normal_image()"><img id="myImg" src="Images/Loaded-Chopped-Veggie-Salad.jpeg" width="100%" height="350px">
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div></div></div>
    </div>
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

