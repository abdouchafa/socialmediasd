<?php
include 'php/config.php';

?>


  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
  </head>
  <body>

   <div class="container">

     <button class="btn btn-primary my-5">
        <a href="crud-operations.php" class="text-light">Add User</a>
      </button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">user name</th>
      <th scope="col">email</th>
      <th scope="col">age</th>
      <th scope="col">password</th>
      <th scope="col">status</th>
      <th scope="col">operations</th>
    </tr>
  </thead>

 <?php

  $sql = "select * from `users`";
  $result = mysqli_query($con,$sql);
  /*
  if($_SESSION['status']== '0'){
    header('location: indexx.php');
  }elseif(!$_SESSION['id']){
    header('location: index.php');
  }
  */
   if($result){
     while( $row=mysqli_fetch_assoc($result)){  
       $id=$row['Id'];
       $username=$row['Username'];
       $email=$row['Email'];
       $age=$row['Age'];
       $password=$row['Password'];
       $status=$row['status'];
      

       echo'
       <tr>
       <th scope="row">'.$id.'</th>
       <td>'.$username.'</td>
       <td>'.$email.'</td>
       <td>'.$age.'</td>
       <td>'.$password.'</td>
       <td>'.$status.'</td>
       
       
       <td>
       <button class="btn btn-primary ">
       <a href="update.php? updateid='.$id.'" class="text-light">Update</a>
      </button>
      <button class="btn btn-danger ">
       <a href="delete.php? deleteid='.$id.' " class="text-light">Delete</a>
      </button>
     </td>
     </tr> ';
   }
}
 ?>

  <tbody>
   
    
  </tbody>
</table>

    <a href="php/logout.php" class="btn btn-danger">Log Out</a>
  </div>
    
  </body>
  </html>