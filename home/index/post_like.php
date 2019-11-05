<?php session_start(); ?>

<?php

include('../../include/php/include.php');

$post_id=$_POST["post_id"];

$user_id=$_SESSION["user_id"];



$sql="insert into click.post_likes(post_likes_user_id,post_likes_post_id) values('$user_id','$post_id')";
$result=mysqli_query($conn,$sql);

if($result)
   {
     $sql="update click.post set post_likes=post_likes+1 where post_id='$post_id'";
     $result=mysqli_query($conn,$sql);
     header("location:index.php");
   }
else
  echo mysqli_error($conn);
?>
