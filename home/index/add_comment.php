<?php session_start();  ?>

<?php
  
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
                            }

 $user_id=$_SESSION["user_id"];
 $comment=test_input($_POST["comment"]);
 $post_id=$_POST["post_id"];


 include("../../include/php/include.php"); 
 
            $sql="insert into post_comments(post_comments_user_id,post_comments_post_id,post_comments_text)values('$user_id','$post_id','$comment')";
           
            $result=mysqli_query($conn,$sql); 
            
            if($result)
               {   
                 echo "added sucessfully";
                     
                       $sql="update post set post_comments=post_comments+1 where post_id='$post_id'";
                       $result=mysqli_query($conn,$sql);
                       if($result)
                            echo " and updated sucessfully";
                       else
                            echo mysqli_error($conn);   
               }
            else
              echo mysqli_error($conn);

//check if post is not done by user

$sql="select post_user_id from click.post where post_id='$post_id'";
$res=mysqli_fetch_assoc(mysqli_query($conn,$sql));

if(strcmp($res['post_user_id'],$user_id)==0)
  {
    $receiver_id=$res['post_user_id'];
    $sql="insert into notifications (notifications_sent_by_user_id,notifications_received_by_user_id,text) values('$user_id','$receiver_id','commented')";

  }


 
 //  header('REFRESH:0');
?>
