<?php session_start(); ?>

<html>
    <head>
            <title>friend-list</title>
            <style>
               button{border-radius:25px;background-color:white;border:1px solid rgb(0,133,161);font:20px impact;color:rgb(0,133,161);}
               button:hover{background-color:rgb(0,133,161);color:white;}
          </style>

          <script src='../include/jquery/jquery.js'></script>
          <script>
              $(document).on('click','.user_info',function(){window.open('../portfolio/portfolio.php?profile_id='+$(this).attr('id'));});

          </script> 
    </head>

    <body>
       <?php  include('header/header.php'); ?>
       <div align='center' style='margin-left:auto;margin-right:auto;margin-top:10px;margin-bottom:10px;background-color:rgb(0,133,161);width:70%;height:500px;border-radius:25px;overflow:scroll'>
        <h1 style='font:40px impact;color:white'>Friends</h1><div>
        <?php
          $user_id=$_SESSION['user_id'];
          
          include('../include/php/include.php');
          
          $sql="select * from click.friend_request_information
                where (friend_request_sender_id='$user_id' or friend_request_receiver_id='$user_id') and friend_request_response='friends'";
          $result=mysqli_query($conn,$sql);
    //var_dump($result);
          if(mysqli_num_rows($result)==0)
             echo "<div style='color:white;font:30px impact;opacity:0.6'> No Friends To Show </div>";
          while($row=mysqli_fetch_assoc($result))
               {
                  $friend_id=$row['friend_request_sender_id'];         
                  
                  if($friend_id==$user_id)
                     $friend_id=$row['friend_request_receiver_id'];

                  $sql="select * from user_list where user_id='$friend_id'";
                  $res=mysqli_fetch_assoc(mysqli_query($conn,$sql));

                  $user_profile_pic=$res['user_profile_pic'];
                  $user_name=$res['user_user_name'];
                  $user_full_name=$res['user_first_name'].' '.$res['user_middle_name'].' '.$res['user_last_name'];
                  $user_description=$res['user_description'];

                  echo"<div style='margin-top:15px;width:95%;height:120px;margin-right:auto;margin-left:auto;overflow:hidden;margin-bottom:20px'>

							 <div style='width:49%;height:100%;background-color:white;border-radiu2:5px;border-radius:25px;'>
								
								<div class='user_info' id='$friend_id' style='padding:5px;height:90%;width:20%;float:left'>
								   <a href='#'>
								       <img src='../database/$user_profile_pic' alt='pic not available' style='height:100%;width:100%;border-radius:50%;border:1px solid rgb(0,133,161)'>
								   </a>
								</div>
				 
								<div class='user_info' id='$friend_id' style='width:50%;height:100%;float:left'>
								          <p><b>$user_name</b></p>
								          <p style='color:grey;'><small><b>$user_full_name</b></small></p>
								          <p style='color:grey;'><small><b>$user_description</b></small></p>                  
								</div>

								<div class='remove_friend' style='height:100%;width:20%;float:left;margin-top:10px'>
								       
								      <form action='remove_friend.php' method='post'>
								         <input type='hidden' id='user_id' name='user_id' value='$friend_id'></input>
								         <button type='submit' class='add_friend' style='margin-top:30px'>remove<br>friend</button>
								       </form>
								</div>
							      
							 </div>
				 
								 
							    <!--two profile in single column dont show border-->
						   </div>";
               }     
        ?></div>
       </div>
        <?php include('footer/footer.php'); ?> 
   </body>

</html>
