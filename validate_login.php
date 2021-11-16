<?php

 include("connection.php");

 if (isset($_POST['submit'])){
     
     $username = $_POST['username'];
     $password = $_POST['password'];
     
     $sql = "select username,password,password from food_order where username='".$username."' and password='".$password."'";
     $result = $conn->query($sql);
     
     if ($result->rowCount() == 1)
     {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];
            header("location:https://www.paradisefoodcourt.in/restaurants-in-vizag.html");
        
        

     } 
     else{
        header("location:login.php");
     }

    }
  

?>