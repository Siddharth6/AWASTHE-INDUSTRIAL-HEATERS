<?php

session_start();
if(isset($_POST["submit"])){

  $con= mysqli_connect('localhost','root','','heater');

    $username= mysqli_real_escape_string($con, $_POST["email"]);
    $password= mysqli_real_escape_string($con, $_POST['password']);

    
    $password=md5($_POST["password"]);

$query ="(SELECT * FROM users WHERE  name ='$username' AND password ='$password') ";
$exe_query = mysqli_query($con , $query);

$found_num_rows = mysqli_num_rows($exe_query);

if($found_num_rows == 1){

    $_SESSION['login_user']=$username;
    

    echo "<script type='text/javascript'> document.location ='dashboard.php?sucess=login'; </script>";
}else{

  
   
   
    header('location:./login.php?error=INVALID USERNAME OR PASSWORD');
    
}

}



?>