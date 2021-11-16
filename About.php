
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
</style>
<body>
<?php
  include('Header.php');
?>
      <br>
	<div class="bg2">
        <div class="content2">ABOUT US</div>
    </div>
    <div class="container-fluid">
    <div class="row" style="background-color: cornsilk;">
        <div class="col-sm-6">
          <img src="Images/MaleChef.jpeg" width="100%">
        </div>
        <div class="col-sm-6">
        <div class="text6">Paradise Since 1953</div>
        <div class="text5">The world-famous Paradise brand has its origins in a small Canteen and a Café in a cinema theatre called Paradise in Secunderabad in the Year 1953.The tradiational and culture of flavours close to their art and history of making chefs at place.
          Here, guests can discover authentic Hyderabadi cuisine made from natural ingredients by classically-trained Chefs. Everything tastes as it should – sublime.

          
          
        </div><br><br>
        
      </div>
    </div>
</div>

<div style="height:300px;background-color:black;color:orange;padding-left: 100px;font-size:36px"><p>The bright décor and comfortable seating make it ideal for a relaxed meal, while cordial service elevates your dining experience. If you are in a hurry, go straight to our Takeaway and walk out with your favourite dishes from a menu of over 70 varieties covering the best of Kebabs, Curries, Biryanis and Desserts.</p></div>

<div class="parallax"></div>

<div style="height:300px;background-color:black;color:orange;padding-left: 100px;font-size:36px">
  Chefs bring the exquisite culinary marvels from the royal courts of Nizams to people around the world. Our signature dishes are celebrated for their unforgettable purity and taste. Come experience dining at its best.
</div>

  <div class="container row">
    <div class="col-sm-6" style="color: red;font-size: 49px;">Ratings from Customers</div>
    <div class="col-sm-6 imgcontent"><img src="Images/RatingStar.png" width= "25px" class="img2"><img src="Images/RatingStar.png" width= "25px" class="img2"><img src="Images/RatingStar.png" width= "25px" class="img2"><img src="Images/RatingStar.png" width= "25px" class="img2"><img src="Images/RatingStar.png" width= "25px" class="img2">
      <div class="imgcontent">Average customer rating 4.2 (245 votes)</div>
    </div>
  
  </div>
  <?php
  include('Footer.php');
?>
</body>
</html>
