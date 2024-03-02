
<?php
  
  include 'php/config.php';
  if(isset($_GET['updateid'])){
 $id = $_GET['updateid'];
  $sql= "SELECT * FROM `users` WHERE Id='$id'";
    $result = mysqli_query($con, $sql);
    $row  = mysqli_fetch_assoc($result);
    $id=$row['Id'];
    $username=$row['Username'];
    $email=$row['Email'];
    $age=$row['Age'];
    $password=$row['Password'];
    $status=$row['status'];
   
    


  if(isset($_POST['submit'])){
    //$id=$_POST['Id'];
    $username=$_POST['Username'];
    $email=$_POST['Email'];
    $age=$_POST['Age'];
    $password=$_POST['Password'];
    $status=$_POST['status'];
   
    
    $sql = "update `users` set Id=$id , Username='$username',Email='$email',Age='$age', Password='$password' where Id='$id' ";
    $result =  mysqli_query($con,$sql);

    if($result){
      
        header("location:display.php");
    }
    else{
      die(mysqli_error($con));
    }
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
    <input type="text" class="form-control"  placeholder="Enter Your user Name" name="Username" value=<?php echo $username; ?> >
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control"  placeholder="Enter Your Email" name="Email" value=<?php echo $email; ?>>
  </div>

  <div class="form-group">
    <label>age</label>
    <input type="text" class="form-control"  placeholder="Enter Your age"  name="Age" value=<?php echo $age; ?>>
  </div>

  <div class="form-group">
    <label>password</label>
    <input type="text" class="form-control"  placeholder="Enter Your Paeeword"  name="Password" value=<?php echo $password; ?>>
  </div>

  <div class="form-group">
    <label>status</label>
    <input type="text" class="form-control"  placeholder="Enter Your status"  name="status" value=<?php echo $status; ?>>
  </div>

 

  
  
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

    </div>

  </body>
</html>