<?php session_start();?>

<?php
include('../../include/php/include.php');

$user_id=$_SESSION["user_id"];

$sql="select * from click.post";
$result=mysqli_query($conn,$sql);

if($result)
  {
       echo"<h1 style='font:40px impact;color:white'>Today's Feeds</h1>";
       

       $feeds=array();
       $index=0;
       while($feeds[]=mysqli_fetch_assoc($result))
       {
         $index++;
       }
    while($index-->0)
         {
           $row=$feeds[$index];
           $post_user_id=$row["post_user_id"];
           
           $post_type=$row["post_type"];
 
           $post_media=$row["post_media"];
           $post_caption=$row["post_caption"];
           $post_likes=$row["post_likes"];
           $post_comments=$row["post_comments"];
           $post_time=substr($row["post_time"],0,10);
           $post_id=$row["post_id"];

           $sql="select user_user_name,user_profile_pic from click.user_list where user_id='$post_user_id'";
           $res=mysqli_fetch_assoc(mysqli_query($conn,$sql));
          
           $post_user_name=$res['user_user_name'];
           $profile_pic=$res['user_profile_pic'];
           

           $sql="select * from click.friend_request_information 
                where ( (friend_request_sender_id='$user_id' and friend_request_receiver_id='$post_user_id') or 
                     (friend_request_sender_id='$post_user_id' and friend_request_receiver_id='$user_id') ) and friend_request_response='friends'";
           $if_friends=mysqli_fetch_assoc(mysqli_query($conn,$sql)); //check if both are friends
           
       //    if(strcmp($post_type,'public')==0 || size_of($if_friends)>0 || ($user_id==$post_user_id)) //checking if post is public or both are friends or self-post
         //    {
           //    if(strcmp($post_media,'')!=0 || strcmp($post_caption,'')!=0)                                                     
             //        { 
                         
                               echo"<div align='center' style='width:50%;height:auto;padding:10px;margin:10px;border:1px solid rgb(0,133,161);
                                                       background-color:white;border-radius:25px'>

                                                   <div class='feeds_info' id='$post_user_id' style='height:80px;width:500px;margin-bottom:5px'>

                                                           <div style='float:left';><img src='../../database/$profile_pic' style='height:80px;width:80px;
                                                                                                                           border-radius:50%;float:left'></div>

                                                           <div style='float:left;width:40%;text-align:left;'><p style='font:25px 
                                                                                                               impact;color:rgb(0,133,161)'>&nbsp$post_user_name</p></div>

                                                           <div style='float:right;margin-top:5%'><p style='font 10px; 
                                                                                                       impact;color:color:rgb(0,133,161);float:right;opacity:0.6;'>
                                                                                     posted on:$post_time</div>  
                                                  </div>";
                           
                            if(strcmp($post_media,'')!=0)
                                   {
                                             echo "<div class='feeds_image'>
                                               
                                                       <img src='../../database/$post_media' style='height:500px;width:500px;border:1px solid rgb(0,133,161);
                                                                                                    border-radius:25px;'>
                                           
                                                 </div>";
                                   }          
            
                            if(strcmp($post_caption,'')!=0)//if post caption exist
                                   { 
                                            echo "<div class='feeds_caption' style='background-color:rgb(255,255,255);width:480px;height:auto;padding:10px;
                                                                               word-wrap:break-word;border-radius:25px;'>
                                                 
                                                        <p style='text-align:left'><b>$user_name</b>$post_caption<p>
                                           
                                                 </div>";
                                    }  
			      
                           
                           $sql="select count(*) from post_likes where post_likes_post_id='$post_id' and post_likes_user_id='$user_id'";//checking if already liked
                           $if_liked=mysqli_fetch_assoc(mysqli_query($conn,$sql));
                           $like='Like';  //what to print on like button
                           $like_action='post_like.php';
                           if($if_liked["count(*)"]==1)
                             { $like='liked';$like_action='dislike_post.php';}
                                
                                            echo"<div class='feeds_button' style='margin-top:5px;margin-bottom:35px;margin-left:12px;margin-top:10px'>
				                   
					               <form id='like' action='$like_action' method='post' style='float:left;margin-right:3px'>
                                                             <input type='hidden' id='post_id' name='post_id' value='$post_id'></input>
                                                             <button type='submit' id='like'>$like($post_likes)</button>
                                                       </form>
 
                                                       <form id='see_large' action='single_post.php' method= 'post' style='float:left;margin-right:3px'>
                                                             <input type='hidden' id='if_liked' name='if_liked' value='$like'></input>
                                                             <input type='hidden' id='post_id' name='post_id' value='$post_id'></input>
                                                             <button type='submit' id='see_large'>See Large</button>
                                                       </form>

                                                        <form id='share' action='post_share.php' method='post' style='float:left'>
						             <input type='hidden' id='post_id' name='post_id' value='$post_id'></input>
                                                             <input type='hidden' id='post_user_name' name='post_user_name' value='$post_user_name'></input>
                                                             <button type='submit' id='share'>Share</button> 
						        </form>
                                                 </div>";
                                                  
              //                }
                    echo "</div>";
 
            // }
         }//end of while loop
}//end of if

else
  echo mysqli_error($conn);
?>
