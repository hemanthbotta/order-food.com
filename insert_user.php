<?php
 include("connection.php");

 if (isset($_GET['submit'])){
     $fullname = $_GET['fullname'];
     $phone = $_GET['phone'];
     $email = $_GET['email'];
     $username = $_GET['username'];
     $password = $_GET['password'];
     $confirmpassword = $_GET['confirmpassword'];
     $address = $_GET['address'];
     

     //PREPARED STATEMENT
      $sql = "INSERT INTO food_order (name,phone,email,username,password,confirmpassword,address) VALUES (?,?,?,?,?,?,?)";
      $stmt =  $conn->prepare($sql);
      $data = array($fullname,$phone,$email,$username,$password,$confirmpassword,$address); 
      $stmt->execute($data);

  //  echo "Product addedd successfully <a href=select.php>SHOW ALL PRODUCTS</a>";

     header('location:login.php');
 }

?>