<?php
 include("php/config.php");

// Step 3: Handle form submission
if (isset($_POST['submit'])) {
    $postId = $_POST['postId'];
    $userId = $_POST['userId']; 
    $content = $_POST['content'];
     $likes = $_POST['likes']; 
    $comments = $_POST['comments'];
    $created_at = date('Y-m-d H:i:s');

    // Step 4: Insert post data into the database
    $sql = "INSERT INTO posts (postId, userId, content, likes, comments, created_at) VALUES ('$postId', '$userId', '$content','$likes', '$comments', '$created_at')";

   $result = mysqli_query($con,$sql);

   if($result){
    header("location:indexx.php");
   }
   else{
    die(mysqli_error($con));
   }
}
?>
