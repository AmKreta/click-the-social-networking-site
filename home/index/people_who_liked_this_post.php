<?php session_start(); ?>

<html>
    <head>
            <title>friend-list</title>
            <style>
               button{border-radius:25px;background-color:white;border:1px solid rgb(0,133,161);font:20px impact;color:rgb(0,133,161);}
               button:hover{background-color:rgb(0,133,161);color:white;}
          </style>

          <script src='../../include/jquery/jquery.js'></script>
          <script>
              $(document).on('click','.user_info',function(){window.open('../../portfolio/portfolio.php?profile_id='+$(this).attr('id'));});

          </script> 
    </head>

    <body>
       <?php  include('header/header.php'); ?>
      
       <div align='center' style='margin-left:auto;margin-right:auto;margin-top:10px;margin-bottom:10px;background-color:rgb(0,133,161);width:70%;height:500px;border-radius:25px;overflow:scroll'>
        
       <h1 style='font:40px impact;color:white'>People who liked this post</h1><div>
       

       <?php
          $user_id=$_SESSION['user_id'];
          $post_id=$_POST['post_id'];
          
          include('../../include/php/include.php');
          
         $sql="select post_likes_user_id from post_likes where post_likes_post_id='$post_id'";
         $people_who_liked_this=mysqli_query($conn,$sql);
         $liked_by=array();
        
         while($row=mysqli_fetch_assoc($people_who_liked_this))
              {
                $liked_by[]=$row['post_likes_user_id'];
              }
        

          $liked_by='('.implode(',',$liked_by).')';

          $sql="select * from user_list where user_id in $liked_by";
          $res=mysqli_query($conn,$sql); 
                   
          while($row=mysqli_fetch_assoc($res))
               {  //var_dump($row);
                  $liked_by_id=$row['user_id'];
                  $user_profile_pic=$row['user_profile_pic'];
                  $user_name=$row['user_user_name'];
                  $user_full_name=$row['user_first_name'].' '.$row['user_middle_name'].' '.$row['user_last_name'];
                  $user_description=$row['user_description'];
                 // echo $user_full_name;
                  echo"<div style='margin-top:15px;width:95%;height:120px;margin-right:auto;margin-left:auto;overflow:hidden;margin-bottom:20px'>

							 <div style='width:49%;height:100%;background-color:white;border-radiu2:5px;border-radius:25px;'>
								
								<div class='user_info' id='$liked_by_id' style='padding:5px;height:90%;width:25%;float:left'>
								   <a href='#'>
								       <img src='../../database/$user_profile_pic' alt='pic not available' style='height:100%;width:100%;border-radius:50%;border:1px solid rgb(0,133,161)'>
								   </a>
								</div>
				 
								<div class='user_info' id='$liked_by_id' style='width:50%;height:100%;float:left'>
								          <p><b>$user_name</b></p>
								          <p style='color:grey;'><small><b>$user_full_name</b></small></p>
								          <p style='color:grey;'><small><b>$user_description</b></small></p>                  
								</div>

					               </div>
				 
                        </div>";
               }   
        ?>

             </div></div>
      
        <?php include('footer/footer.php'); ?> 
   </body>

</html>
