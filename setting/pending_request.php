<?php session_start(); ?>

<?php

  function echo_data($result,$header,$form_action,$button,$empty_message)
           {
             echo"<div style='margin-top:5px;width:90%;background-color:white;height:100px;border-radius:25px;margin-right:auto;margin-left:auto;'>
					  <p style='color:rgb(0,133,161);font:35px impact;text-align:center;'>$header</p>
				     </div>";
                   if(mysqli_num_rows($result)==0)
                                    echo "<div style='font:30px impact;color:white;text-align:center;opacity:0.6'>".$empty_message."</div>";
				      
                             if($result)
			       { 
                                   
                                 while($row=mysqli_fetch_assoc($result))
			              {
					     $user_full_name=$row["user_first_name"].' '.$row["user_middle_name"].' '.$row["user_last_name"];
					     $user_name=$row["user_user_name"];
					     $user_gender=$row["user_gender"];
					     $user_profile_pic=$row["user_profile_pic"];
					     $user_description=$row["user_description"];
					     $user_id=$row["user_id"];

					     if(strcmp($float,'left')==0)
						$float='right';
					     else
						$float='left';

					     echo"<div style='margin-top:15px;width:90%;height:110px;margin-right:auto;margin-left:auto;overflow:hidden;margin-bottom:20px'>

							 <div style='width:49%;height:100%;background-color:white;border-radiu2:5px;float:$float;border-radius:25px;'>
								
								<div class='user_info' id='$user_id' style='padding:5px;height:90%;width:20%;float:left'>
								   <a href='#'>
								       <img src='../database/$user_profile_pic' alt='pic not available' style='height:100%;width:100%;border-radius:50%;border:1px solid rgb(0,133,161)'>
								   </a>
								</div>
				 
								<div class='user_info' id='$user_id' style='width:50%;height:100%;float:left'>
								          <p><b>$user_name</b></p>
								          <p style='color:grey;'><small><b>$user_full_name</b></small></p>
								          <p style='color:grey;'><small><b>$user_description</b></small></p>                  
								</div>

								<div class='send_request' style='height:100%;width:25%;float:right;margin-right:10px;'>
								       
								      <form action='$form_action' method='post'>
								         <input type='hidden' id='user_id' name='user_id' value='$user_id'></input>
								         <button type='submit' class='add_friend' style='margin-top:30px'>$button</button>
								       </form>
								</div>
							      
							 </div>
				 
								 
							    <!--two profile in single column dont show border-->
						   </div>";
					   }// end of while loop
				 
				   }// end of if

           }//end of function
     
  include("../include/php/include.php");
 
 

  function arr_to_string($data,$str)
           {
             $user_id_of_sent_friend_request=array();
          
             while($row=mysqli_fetch_assoc($data))
                  $user_id_of_sent_friend_request[]=$row[$str];
             return '('.implode(',',$user_id_of_sent_friend_request).')';  
           }

  $user_id=$_SESSION['user_id'];

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------//

 //pending request sent

 //first collect id's of all user who received friend request then use 'in'
  $sql="select friend_request_receiver_id 
        from click.friend_request_information 
        where friend_request_sender_id='$user_id' and friend_request_response='pending'";
  $result=mysqli_query($conn,$sql);

  $sent_request=arr_to_string($result,"friend_request_receiver_id");

  //echo $sent_request;

  $sql="select user_first_name user_middle_name,user_last_name,user_user_name,user_gender,user_profile_pic,user_description,user_id 
        from  click.user_list
        where user_id in $sent_request ";
  
  $result=mysqli_query($conn,$sql);
  
  // var_dump($result);
  echo_data($result,'sent request...','cancel_sent_request.php','cancel request','no sent request');

  
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------//

 //pending request received

  $sql="select friend_request_sender_id 
        from click.friend_request_information 
        where friend_request_receiver_id='$user_id'  and friend_request_response='pending'";
  $result=mysqli_query($conn,$sql);

  
  
  $received_request=arr_to_string($result,"friend_request_sender_id");


  $sql="select user_first_name user_middle_name,user_last_name,user_user_name,user_gender,user_profile_pic,user_description,user_id 
        from  click.user_list
        where user_id in $received_request";
  
  $result=mysqli_query($conn,$sql);
  
  echo_data($result,'received friend request...','accept_received_request.php','accept request','no received request');
   


?>
