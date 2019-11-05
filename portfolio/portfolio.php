<?php session_start();?>

<html>
     <head>
            <script src='../include/jquery/jquery.js'></script>
            <script>
               $(document).on('click','.uploaded_pictures',function(event)
                                                                   {
                                                                     $('#post_id').val($(this).attr('id'));console.log($(this).attr('id'));
                                                                     $('#submit').click();
                                                                   })
            </script>
     </head>

<body >

    <?php include('header/header.php');  ?>

    <?php
       
        include('../include/php/include.php');    
  
        $user_id=$_SESSION['user_id'];

        $profile_id=$_GET['profile_id'];
        
        
        $sql="select * from click.user_list where user_id='$profile_id'";
        $user_details=mysqli_fetch_assoc(mysqli_query($conn,$sql));
        
        $user_name=$user_details['user_user_name'];
        $user_full_name=$user_details['user_first_name'].' '.$user_details['user_middle_name'].' '.$user_details['user_last_name'];
        $user_gender=$user_details['user_gender'];
        $user_status=$user_details['user_status'];
        $user_description=$user_details['user_description'];
        $user_dob=$user_details['user_dob'];
        $user_e_mail=$user_details['user_e_mail'];  

       // print_r($user_details);
        $profile_pic=$user_details['user_profile_pic'];

        $sql="select post_media,post_type,post_id from click.post where post_user_id='$profile_id'";
        $user_post=mysqli_query($conn,$sql);

        $sql="select * from click.friend_request_information where ((friend_request_sender_id='$user_id' and friend_request_receiver_id='$profile_id') or(friend_request_receiver_id='$user_id' and friend_request_sender_id='$profile_id')) and friend_request_response='friends'";
        $is_friend=mysqli_fetch_assoc(mysqli_query($conn,$sql));
      

        echo "<br><div align='center' class='portfolio' style='width:80%;height:auto;background-color:rgb(0,133,161);margin-left:auto;margin-right:auto;border-radius:25px;overflow:hidden'>
                   
		       <br><div class='info' style='width:90%;height:300px;border-radius:25px;background-color:white;padding:10px'>
		                 <div class='profile_pic' style='height:300px;width:30%;float:left'>
		                       <img src='../database/$profile_pic' style='width:100%;height:100%;border-radius:25px;'>
		                 </div>
                                 <div class='info' id='$profile_id' align='left' style='float:left;margin-left:20px'>
                                       <p style='font:25px impact'>$user_name</p>
                                       <p style='font:20px impact;color:grey;'>$user_full_name ( $user_gender ) </p>
                                       <p style='font:20px impact;color:grey;'>$user_dob</p>
                                       <p style='font:20px impact;color:grey;'>$user_e_mail</p>
                                       <p style='font:20px impact;color:grey;'>$user_description</p>
                                       <p style='font:20px impact;color:grey;'>$user_status</p>
                                 </div>		                 
		           </div>";

		      echo"<div class='feeds' style='margin-left:auto;margin-right:auto;width:90%;height:auto;'>
	                   <h1 style='color:white;font:50px impact;'>Uploaded Photos</h1><br>
                           <form action='../home/index/single_post.php' method='post'>";
		           while($row=mysqli_fetch_assoc($user_post))
		                {
		                   //var_dump($row);
		            if(((strcmp($row['post_type'],'public')==0) or ($is_friend!=NULL) or (strcmp($profile_id,$user_id)==0)) and strcmp($row['post_media'],'')!=0)
		                     {
		                            $post_id=$row['post_id'];
		                            $post_media=$row['post_media'];
		                      echo "<img src='../database/$post_media' id='$post_id' class='uploaded_pictures' style='width:220px;height:220px;border-radius:25px;margin:10px;float:left'>";                   
                                     }
		               }
		      echo"<input type='hidden' name='post_id' id='post_id' value=''></input>
                           <button type='submit' id='submit' style='display:none'></button>
                            </form></div>
 
             </div><br>";


   ?>

   <?php include('footer/footer.php'); ?>
</body>

</html>
