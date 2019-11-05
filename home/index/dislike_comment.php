<?php session_start(); ?>

<?php
 
 $comment_id=$_POST["post_comment_like_comment_id"];
 $user_id=$_SESSION["user_id"];
 //var_dump($_POST);
 include('../../include/php/include.php');

 $sql="delete from click.post_comments_likes where post_comments_likes_user_id='$user_id' and post_comments_likes_comment_id='$comment_id'";
 $result=mysqli_query($conn,$sql);

 if($result)
   { echo"disliked sucessfully";
     $sql="update post_comments set post_comments_likes=post_comments_likes-1 where post_comments_id=$comment_id";
     $result=mysqli_query($conn,$sql);
     if($result)
       echo "and updated sucessfully";
     else
       echo mysqli_error($conn);
   }

 else
    echo mysqli_error($conn);

?>
