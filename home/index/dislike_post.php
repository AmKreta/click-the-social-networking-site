<?php session_start(); ?>

<?php

$post_id=$_POST['post_id'];
$user_id=$_SESSION['user_id'];


include('../../include/php/include.php');

//echo $user_id;

$sql="delete from post_likes where post_likes_user_id='$user_id' and post_likes_post_id='$post_id'";
$result=mysqli_query($conn,$sql);

if($result)
   {
     $sql="update post set post_likes=post_likes-1 where post_id='$post_id'";
     $result=mysqli_query($conn,$sql);
     if(!$result)
       echo mysqli_error($conn);
   }
else
   echo mysqli_error($conn);
header('location:index.php');

?>
