<?php session_start(); ?>

<?php
  include("../include/php/include.php");
  
  $user_id=$_SESSION["user_id"];
 

      $sql="select friend_request_information.friend_request_sender_id,friend_request_information.friend_request_receiver_id 
            from friend_request_information 
            where (friend_request_sender_id='$user_id' or friend_request_receiver_id='$user_id')";//select all field in which user is sender or receiver
      $result=mysqli_query($conn,$sql);
   //   echo mysqli_error($conn);

      $user_id_of_friends=array(); //array to store user_ids of friends
     
      //var_dump(mysqli_fetch_assoc($result));
      while($row=mysqli_fetch_assoc($result))
           {
             //if(! in_array($row["friend_request_sender_id"],$row))
                 $user_id_of_friends[]=$row["friend_request_sender_id"];
             //if(! in_array($row["friend_request_receiver_id"],$row))
                 $user_id_of_friends[]=$row["friend_request_receiver_id"];
             // var_dump($row);
           }
     $user_id_of_friends=array_unique($user_id_of_friends);
     $temp= '('.implode(',',$user_id_of_friends).')'; //implode is a function that returns string when array is sent as argument temp=(id1,id2,id3)
    
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------//

     //starting to suggest friends

$float='left';

if(strcmp($temp,"()")==0)//ie string are equal
  {
    $sql="select user_first_name,user_middle_name,user_last_name,user_user_name,user_gender,user_profile_pic,user_description,user_id 
      from user_list
      where  not user_id=$user_id";
  }  
else
  {
    $sql="select user_first_name,user_middle_name,user_last_name,user_user_name,user_gender,user_profile_pic,user_description,user_id 
      from user_list
      where user_id not in $temp and not user_id=$user_id"; //exclude all fields in which user is sender or receiver
  }

$result=mysqli_query($conn,$sql);

   if(mysqli_num_rows($result)==0)
                                    echo "<div style='font:30px impact;color:white;text-align:center;opacity:0.6'>"."all people on TANGLE are your friend"."</div>";
  if($result)
    {
     echo"<div style='margin-top:5px;width:90%;background-color:white;height:100px;border-radius:25px;margin-right:auto;margin-left:auto;'>
                             <p style='color:rgb(0,133,161);font:35px impact;text-align:center;'>You may know...</p>
                        </div>";
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

             echo"<div style='margin-top:15px;width:90%;height:120px;margin-right:auto;margin-left:auto;overflow:hidden;margin-bottom:20px'>

                         <div style='width:49%;height:100%;background-color:white;border-radiu2:5px;float:$float;border-radius:25px;'>
                                
                                <div class='user_info' id='$user_id' style='padding:5px;height:90%;width:20%;float:left'>
                                   <a href='#'>
                                       <img src='../database/$user_profile_pic' alt='pic not available' style='height:100%;width:100%;border-radius:50%;border:2px solid rgb(0,133,161)'>
                                   </a>
                                </div>
 
                                <div class='user_info' id='$user_id' style='width:50%;height:100%;float:left'>
                                          <p><b>$user_name</b></p>
                                          <p style='color:grey;'><small><b>$user_full_name</b></small></p>
                                          <p style='color:grey;'><small><b>$user_description</b></small></p>                  
                                </div>

                                <div class='send_request' style='height:100%;width:25%;float:right;margin-right:10px;'>
                                       
                                      <form action='add_friend.php' method='post'>
                                         <input type='hidden' id='user_id' name='user_id' value='$user_id'></input>
                                         <button type='submit' class='add_friend' style='margin-top:30px'>Add Friend</button>
                                       </form>
                                </div>
                              
                         </div>
 
                                 
                            <!--two profile in single column dont show border-->
                   </div>";
           }
 
   }
?>
