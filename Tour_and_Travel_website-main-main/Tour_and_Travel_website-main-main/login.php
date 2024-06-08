<?php
   include("database.php");
   session_start();
   print "something";
   $error = null;
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT name FROM users WHERE email = '$myusername' and password = '$mypassword'";
      
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         $_SESSION['name']=$row['name'];
         header("Location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   else{
      $error = "GET not allowed";
   }
   print $error;
   $_SESSION['message']=$error;
   header("Location: index.php");
?>