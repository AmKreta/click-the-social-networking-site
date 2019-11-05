<?php session_start();  ?>

<?php
          $user_id=$_SESSION['user_id'];

          $search_input=$_POST['search_input'];//var_dump($_POST);
          

          include('../include/php/include.php');
          
          $sql="select * from click.user_list where (user_user_name like '$search_input%') or (user_first_name like '$search_input%') or(user_middle_name like '$search_input%') or (user_last_name like '$search_input%')";
          $result=mysqli_query($conn,$sql);
   
          
         while($row=mysqli_fetch_assoc($result))
               {
                  $user_profile_pic=$row['user_profile_pic'];
                  $user_name=$row['user_user_name'];
                  $user_full_name=$row['user_first_name'].' '.$row['user_middle_name'].' '.$row['user_last_name'];
                  $user_description=$row['user_description'];
                  $user_user_id=$row['user_id'];


                  if($user_user_id==$_SESSION['user_id']) //ie self
                     {
                        $action='#';
                        $button='----';
                     }
  
                  else
                    {
                       $sql="select * from click.friend_request_information where  (friend_request_sender_id='$user_id' and friend_request_receiver_id='$user_user_id') or (friend_request_sender_id='$user_user_id' and friend_request_receiver_id='$user_id') ";

                       $if_friend=mysqli_fetch_assoc(mysqli_query($conn,$sql));
                     
                       if(strcmp($if_friend['friend_request_response'],'friends')==0)
                         {
                           $action='../friends/remove_friend.php';
                           $button='remove<br>friend';
                         }
                      else if(strcmp($if_friend['friend_request_response'],'pending')==0)
                         {
                            if($if_friend['friend_request_sender_id']==$user_id)
                               {
                                  $action='../setting/cancel_sent_request.php';
                                  $button='pending';
                               }
                            else
                               {
                                  $action='../setting/accept_received_request.php';
                                  $button='cancel';
                               }
                         } 
                       else
                         {
                            $action='../setting/add_friend.php';
                            $button='add<br>friend';
                         }
                    }

                  echo"<div style='margin-top:15px;width:95%;height:120px;margin-right:auto;margin-left:auto;overflow:hidden;margin-bottom:20px'>

							 <div style='width:49%;height:100%;background-color:white;border-radiu2:5px;border-radius:25px;'>
								
								<div class='user_info' id='$user_user_id' style='padding:5px;height:90%;width:20%;float:left'>
								   <a href='#'>
								       <img src='../database/$user_profile_pic' alt='pic not available' style='height:100%;width:100%;border-radius:50%;border:1px solid rgb(0,133,161)'>
								   </a>
								</div>
				 
								<div class='user_info' id='$user_user_id' style='width:50%;height:100%;float:left'>
								          <p><b>$user_name</b></p>
								          <p style='color:grey;'><small><b>$user_full_name</b></small></p>
								          <p style='color:grey;'><small><b>$user_description</b></small></p>                  
								</div>

								<div class='form' style='height:100%;width:20%;float:left;margin-top:10px'>
								       
								      <form id='myform' action='$action' method='post'>
								         <input type='hidden' id='user_id' name='user_id' value='$user_user_id'></input>
								         <button type='button' class='form_submit' style='margin-top:30px'>$button</button>
								       </form>
								</div>
							      
							 </div>
				 
								 
							    <!--two profile in single column dont show border-->
						   </div>";
               }   
        ?>
