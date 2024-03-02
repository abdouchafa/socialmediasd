<?php
  
  include ("php/config.php");
  if(isset($_POST['submit'])){
    $username=$_POST['Username'];
    $email=$_POST['Email'];
    $age=$_POST['Age'];
    $password=md5($_POST['Password']);
    $status=$_POST['status'];
  
    
    $sql = "insert into `users` (Username,Email,Age,Password,status) values('$username','$email','$age','$password','$status')";
    $result =  mysqli_query($con,$sql);

    if($result){
     header("location:display.php");
    }
    else{
      die(mysqli_error($con));
    }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form  method="post">

  <div class="form-group">
    <label>User Name</label>
    <input type="text" class="form-control"  placeholder="Enter Your username" name="Username">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control"  placeholder="Enter Your email" name="Email">
  </div>

  <div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control"  placeholder="Enter Your username" name="Age">
  </div>

  <div class="form-group">
    <label>password</label>
    <input type="text" class="form-control"  placeholder="Enter Your password" name="Password">
  </div>

  <div class="form-group">
    <label>status</label>
    <input type="text" class="form-control"  placeholder="Enter Your username" name="status">
  </div>

  
  
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>

  </body>
</html>




 
 