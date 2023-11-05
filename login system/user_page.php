<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'] )){
   header('location:login_form.php');
}
if(!isset($_SESSION['user_email']  )){
   header('location:login_form.php');
}
if(!isset($_SESSION['user_bday']  )){
   header('location:login_form.php');
}
// PHP program to pop an alert

// message box on the screen

// Function defnition

function function_alert($message) {   

    // Display the alert box 

    echo "<script>alert('$message');</script>";

} 

// Function call

function_alert("You have successfully Log In!"); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hello, <span>Wonderful Being</span></h3>
      <h1>Named <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>This is what we know about you.</p>
      <p>Your email: <?php echo $_SESSION['user_email'] ?></span></p>
      <p>Your birthday: <?php echo $_SESSION['user_bday'] ?></span></p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>