
 <?php
   include  "php/config.php";
   if(isset($_GET['deleteid'])){
     $id=$_GET['deleteid'];
     $sql = "delete from `users` where Id=$id";
    $result = mysqli_query($con,$sql);

    if($result){
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
   }
 
 ?>