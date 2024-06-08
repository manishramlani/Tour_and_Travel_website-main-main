<?php
require_once('database.php'); 
session_start();




function register($name,$email,$password){
  try {
    global $db;
    $sql="INSERT INTO users(name,email,password) VALUES(?,?,?)";
    $query=$db->prepare($sql);
    $query->bind_param('sss',$name,$email,$password);
    $exec= $query->execute();
      if($exec==true)
      {
      return 1;
      }
      else
      {
        return "Error: " . $sql . "<br>" .$db->error;
      }
  }
  catch (Exception $e){
    $_SESSION['message']=$e;
  }
     
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email    = $_POST['email'];
  $password = $_POST['password'];

  $res = register($name,$email,$password);
  if ($res==1) {
    $_SESSION['login_user'] = $myusername;
    header("Location: index.php");
    die();
  }
  // header("Location: login.php");
  die();
}
?>

