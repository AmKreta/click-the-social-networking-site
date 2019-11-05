<?php session_start(); ?>

<?php

$user_id=$_SESSION['user_id'];
$comment_id=$_POST['comment_id'];
$reply=$_POST['reply'];

include('../../include/php/include.php');

$sql="insert into post_comments_replies (post_comments_replies_user_id,post_comments_replies_comment_id,post_comments_replies_text) values('$user_id','$comment_id','$reply')";
$result=mysqli_query($conn,$sql);

if($result)
    {
      echo 'reply added sucessfully';
      $sql="update post_comments set post_comments_replies=post_comments_replies+1 where post_comments_id='$comment_id'";
      $res=mysqli_query($conn,$sql);
   }
else
  echo mysqli_error($conn);

?>
