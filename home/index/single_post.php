<?php session_start();  ?>


<html>

     <head>
             <title>single post </title>  

             <script src='../../include/jquery/jquery.js'></script>

             <script>
                     
                     function like_comment(comment_id)
                                {
                                  var data=[{name:'comment_id',value:comment_id}];
                                  console.log(data);
                                  $.post('like_comments.php',data,function(info){console.log(info);});
                                }
 
                                       
                     $(document).on('click','.user_info',function(event)
                                                             {  //console.log($(this).attr('id'));
                                                                window.open("../../portfolio/portfolio.php?profile_id="+$(this).attr('id'));
                                                              })

                     $(document).on('click','.comment_like_dislike',function(event){
                                                                                    var data=$(this).parent().serializeArray();
                                                                                    $.post($(this).parent().attr('action'),data,function(info){alert(info);});
                                                                                   })
 
                     $(document).on('click','.comment_reply_submit',function(event){  
                                                                                     console.log('#'+$(this).attr('id'));
                                                                                     var data=$($(this).parent()).serializeArray();
                                                                                      
                                                                                      console.log(data);
                                                                                      if(data[0].value!='')
                                                                                        {
                                                                                         console.log(data);
                                                                                         $.post('reply_comments.php',data,function(info){alert(info);});
                                                                                         $('#comment_reply_form').refresh;
                                                                                        }
                                                                                      else
                                                                                        alert('add some text');
                                                                                    })
                     
                     $(document).on('click','.comment_replies_section',function(event){
                                                                                        var display='block';
                                                                                        id='.'+$(this).attr('id');
                                                                                        if($(id).css('display')=='block')
                                                                                           display='none';
                                                                                        $(id).css('display',display);
                                                                                      })
                     $(document).ready(function()
                                      {
                                       
                                        $('#add_comments_button').click(function(event)
                                                                  { 
                                                                    if($('#comment_text').val()!='')
                                                                         { console.log('a');
                                                                           var data=$('#add_comments_form :input').serializeArray();
                                                                           $.post($('#add_comments_form').attr('action'),data,function(info){alert(info);});
                                                                         }
                                                                      else
                                                                         alert('add some text to the comment box');
                                                                   })
                                        $('#toggle_comments').click(function(event){$('.comments').toggle()});

                                                                    
                                      })
                                      
             </script>

	     <style>
		    
		      button{text-align:center;
		          font:20px impact;
		          color:rgb(0,133,161);
		          background-color:white;
		          border:1px solid rgb(0,133,161);
		          border-radius:25px;
		          width:162px;} 
                     
		     .comments_button button{width:150px;font:15px impact;} 

		     button:hover{color:white;
		          background-color:rgb(0,133,161);
                          border:1px solid rgb(255,255,255);
		          } 

 
              
		 
	     </style>

     <body>

     <body>

     <?php include("header/header.php"); ?>

<div align='center'>

<?php

$post_id=$_POST['post_id'];
$user_id=$_SESSION['user_id'];

include("../../include/php/include.php");



$sql="select * from click.post where post_id='$post_id'";
$row=mysqli_fetch_assoc(mysqli_query($conn,$sql));

           
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
          
           $user_name=$res['user_user_name'];
           $profile_pic=$res['user_profile_pic'];
           

           $sql="select * from click.friend_request_information 
                where ( (friend_request_sender_id='$user_id' and friend_request_receiver_id='$post_user_id') or 
                     (friend_request_sender_id='$post_user_id' and friend_request_receiver_id='$user_id') ) and friend_request_response='friends'";
           $if_friends=mysqli_fetch_assoc(mysqli_query($conn,$sql)); //check if both are friends
           
           if(strcmp($post_type,'public')==0 || size_of($if_friends)>0 || ($user_id==$post_user_id)) //checking if post is public or both are friends or self-post
             {
               if(strcmp($post_media,'')!=0 || strcmp($post_caption,'')!=0)                                                     
                     { 
                         
                               echo"<div align='center' style='width:50%;height:auto;padding:10px;margin:10px;border:1px solid rgb(0,133,161);
                                                       background-color:rgb(0,133,161);border-radius:25px'>

                                                   <div class='user_info' id='$post_user_id' style='height:80px;width:500px;margin-bottom:5px'>

                                                           <div style='float:left';><img src='../../database/$profile_pic' style='height:80px;width:80px;
                                                                                                                           border-radius:50%;float:left'></div>

                                                           <div style='float:left;width:40%;text-align:left;'><p style='font:25px impact;color:white'>$user_name</p></div>

                                                           <div style='float:right;margin-top:5%'><p style='font 10px impact;color:white;float:right;opacity:0.6;'>
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
                                                                               word-wrap:break-word;border-radius:25px;margin-top:10px'>
                                                 
                                                        <p style='text-align:left'>$post_caption<p>
                                           
                                                 </div>";
                                    }  
			      
                           $like='see likes';  //what to print on like button
                          
                                  
                                            echo"<div align='center' class='feeds_button' style='margin-bottom:35px;margin-top:10px;background-color:rgb(0,133,161)'>
				                   
					               <form id='who_liked_this_post' action='people_who_liked_this_post.php' method='post' style='float:left;margin-right:3px;margin-left:90px'>
                                                             <input type='hidden' id='post_id' name='post_id' value='$post_id'></input>
                                                             <button type='submit' id='like_post'>$like($post_likes)</button>
                                                       </form>
 
                                                       <form id='show_comments' action='#' style='float:left;margin-right:3px'>
                                                             <button type='button' id='toggle_comments'>Comments($post_comments)</button>
                                                       </form>

                                                        <form id='share_post' action='post_share.php' method='post' style='float:left'>
						             <input type='hidden' id='post_id' name='post_id' value='$post_id'></input>
                                                             <input type='hidden' id='post_user_name' name='post_user_name' value='$user_name'></input>
                                                             <button type='submit' id='post_share'>Share</button> 
						        </form>
                                                 </div>";
 
                                            echo"<div class='add_comments' style='width:500px;height:auto;margin-top:60px;border-radius:25px;background-color:white'> 
                                                         <h1 style='text-decoration:underline;color:rgb(0,133,161)'>Comments</h1>
 
                                                         <form id='add_comments_form' action='add_comment.php' method='post'style='border:5px solid rgb(0,133,161);
                                                                                                                height:80px; width:90%;padding:10px;border-radius:25px'>
                                                                 <textarea style='width:100%;height:80%;resize:none;border:none;font:20px impact' 
                                                                                             'id='comment_text' name='comment' placeholder='Add some comments'></textarea>
                                                                 <input type='hidden' id='post_id' name='post_id' value='$post_id'></input>
                                                                 <button type='button'style='margin-top:10px;border:5px solid rgb(0,133,161)'
                                                                                                                             id='add_comments_button'>Comment</button>
                                                         </form><br>"; //comment section start and heading 
//starting comment section                                           
                              
                           $sql="select * from post_comments where post_comments_post_id='$post_id'";
                           $comments=mysqli_query($conn,$sql);

                           while($row=mysqli_fetch_assoc($comments)) 
                                {
                                    $post_comment_user_id=$row['post_comments_user_id'];
                                    $comment_post_id=$row['post_comments_post_id'];
                                    $comment_text=$row['post_comments_text'];
                                    $comment_likes=$row['post_comments_likes'];
                                    $comment_replies=$row['post_comments_replies'];
                                    $comment_time=substr($row['post_comments_time'],0,10);
                                    $comment_id=$row['post_comments_id'];

                                    $sql="select * from click.user_list where user_id='$post_comment_user_id'";
                                    $comment_user=mysqli_fetch_assoc(mysqli_query($conn,$sql)); 
                                         
                                    $profile_pic=$comment_user['user_profile_pic'];
                                    $user_name=$comment_user['user_user_name'];

//comments like and replies

                            $sql="select count(*) from post_comments_likes where post_comments_likes_user_id='$user_id' and post_comments_likes_comment_id='$comment_id'";
                            $if_liked=mysqli_fetch_assoc(mysqli_query($conn,$sql));
                            
                            $sql="select count(*) from post_comments_likes where post_comments_likes_comment_id='$comment_id'";
                            $likes=mysqli_fetch_assoc(mysqli_query($conn,$sql)); 
                            $likes=$likes['count(*)'];      
  
                                     $like='like';
                                     $action='like_comment.php';
                                     $class='comment_like';
		                     if($if_liked['count(*)']==1)
		                          {
                                              $like='liked';
                                              $action='dislike_comment.php';
                                              $class='comment_dislike';
                                          }//endif

//buttonns to like dislike and reply comment
                                              echo "<div class='comments' style='border-radius:25px;height:auto;width:90%;
                                                                                                        border:5px solid rgb(0,133,161);padding:5px;overflow:hidden'>
                                                     
                                                           <div class='user_info' id='$post_comment_user_id' style='height:50px;width:50px;border-radius:50%;float:left;margin-top:2px'>
                                                                <img src='../../database/$profile_pic' style='width:50px;height:50px;border-radius:50%;'>
                                                           </div>
 
                                                           <div class='user_info' id='$post_comment_user_id' style='height:auto;width;90%;padding:4%;font:20px impact;overflow-wrap:break-word;text-align:left'>
                                                                   <b>&nbsp$user_name:</b>$comment_text
                                                           </div>

                                                           <div align='center' class='comments_button' style='margin-bottom:35px;margin-top:10px;height:35px'>
				                   
								       <form  action='$action' id='$comment_id' class='$class' method='post' style='float:left'>
                                                                           <input type='hidden' id='post_comment_like_user_id' name='post_comment_like_user_id' value='$user_id'></input>
                                                                           <input type='hidden' id='post_comment_like_comment_id' name='post_comment_like_comment_id' value='$comment_id'></input>                 
                                                                           <button type='button' class='comment_like_dislike'>$like($likes)</button>
				                                       </form>
                                                                       <form style='float:right;color:grey;opacity0.6;'>
		                                                                    posted on:$comment_time
                                                                       </form>";

//reply section
                                                   
                                                    echo mysqli_error($conn);    
				                                   echo"<form class='comment_reply_form' action='reply_comments.php' method='post' style='float:left;width:100%'>
                                                                             <input type='text' id='reply' name='reply' style='height:10px;width:66%;float:left;border-radius:25px;padding:10px'></input>
                                                                             <input type='hidden' id='comment_id' name='comment_id' value='$comment_id'></input>
				                                             <button type='button' class='comment_reply_submit' id='$comment_id' >Reply($comment_replies)</button>
				                                       </form>
                                                                       
                                                        </div>
  
                                                        <h1 class='comment_replies_section' id='$comment_id' style='font:30px impact;color:rgb(0,133,161);'>Replies</h1>
                                                        <div class='$comment_id' style='height:auto;width:100%;display:none'>";
                                                        
//now showing replies----------------
                                                    $sql="select * from post_comments_replies where post_comments_replies_comment_id='$comment_id'";
                                                    $reply=mysqli_query($conn,$sql);
                                                                                     
                                                    while($row=mysqli_fetch_assoc($reply))
                                                         {
                                                            $reply_user_id=$row['post_comments_replies_user_id'];
                                                            $reply_comment_id=$row['post_comments_replies_comment_id'];
                                                            $reply_text=$row['post_comments_replies_text'];
                                                            $reply_time=substr($row['post_comments_replies_time'],0,10);

                                                            $sql="select * from user_list where user_id='$reply_user_id'";
                                                            $user_details=mysqli_fetch_assoc(mysqli_query($conn,$sql));
                                                            
                                                            $reply_user_name=$user_details['user_user_name'];
                                                            $reply_user_full_name=$user_details['user_first_name'].' '.$user_details['user_middle_name'].' '.$user_details['user_last_name'];
                                                            $reply_profile_pic=$user_details['user_profile_pic'];
                                                            
                                                        
                                                          echo"<div style='height:auto;width:100%;margin:5px;'>
                                                                   <div class='user_info' id='$reply_user_id' style='height:50px;width:50px;float:left;'>
                                                                      <img src='../../database/$reply_profile_pic' style='width:50px;height:50px;border-radius:50%;border:1px solid rgb(0,133,161);'>
                                                                   </div>
 
                                                                   <div style='height:auto;width;90%;padding:4%;font:20px impact;overflow-wrap:break-word;text-align:left;'>
                                                                    <b class='user_info' id='$reply_user_id'>&nbsp$reply_user_name:</b>$reply_text<br>
                                                                    <small style='float:right;color:grey;'>$reply_time</small><br>
                                                                                               
                                                                   </div>
                                                               </div>";
                                                         }
                                                    echo"</div>
                                                 
                                                  </div><br>";              
                                                                                  
                                 }//end of comments while loop
                                
                                           echo "</div>";//end of comment section

	        echo" </div>";
                            
                            

                    } //end of if both media and caption are null
 
             }// end of if post is public or user is friend
  
?>

</div>
<?php include("footer/footer.php"); ?>

</body>

</html>


