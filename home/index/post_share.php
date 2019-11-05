<?php session_start();   ?>


<html>
    <head>  
            <title>share post</title>
            
            <style>
                button{
                        background-color:rgb(0,133,161);
                        font:20px impact;
                        color:white;
                        border-radius:25px;
                      }
                button:hover{
                           background-color:white;
                           border:1px solid rgb(0,133,161);
                           color:rgb(0,133,161);
                     }
            </style>
                                                      
            <script src='../../include/jquery/jquery.js'></script>

            <script>
                    function send(friend_id,post_id,post_user_name)
                            {
                              var data=[{name:'friend_id',value:friend_id},{name:'post_id',value:post_id},{name:'post_user_name',value:post_user_name}];
                              $.post('send_post.php',data,function(info,status){console.log(info);})
                              alert('shared');
                            }
            </script>  
    </head>

<body>

<?php include('header/header.php'); ?>

<?php


$user_id=$_SESSION['user_id'];
$post_id=$_POST['post_id'];
$post_user_name=$_POST['post_user_name'];


include('../../include/php/include.php');

$sql="select * from click.friend_request_information where (friend_request_sender_id='$user_id' or friend_request_receiver_id='$user_id') and friend_request_response='friends'";

$result=mysqli_query($conn,$sql);  

                   echo" <div class='chat_list_friends' style='overflow-y:scroll;height:83%;width:40%;background-color:rgb(0,133,161);margin-top:2%;margin-left:auto;margin-right:auto;margin-bottom:2%;border-radius:25px;scrollbar-width:thin;'>
                         <h1 align='center' style='color:white;'> share as message  </h1>"; 

                   while($row=mysqli_fetch_assoc($result))
                         {
                           
                           $friend_id=$row['friend_request_sender_id'];
                           if($row['friend_request_sender_id']==$user_id)
                               $friend_id=$row['friend_request_receiver_id'];
                           
                           $sql="select * from user_list where user_id='$friend_id'";
                           $friend_info=mysqli_fetch_assoc(mysqli_query($conn,$sql));      
                           
                           $friend_name=$friend_info['user_first_name'].' '.$friend_info['user_middle_name'].' '.$friend_info['user_last_name'];    
                           $friend_user_name=$friend_info['user_user_name'];     
                           $friend_profile_pic=$friend_info['user_profile_pic'];
                           $friend_status=$friend_info['user_status'];
                           $friend_description=$friend_info['user_description'];
                           $friend_id=$friend_info['user_id'];
                           
                           echo "<div style='margin:5px;height:100px;width:94%;overflow:hidden;background-color:white;border-radius:25px;padding:5px' class='friends' id='$friend_id'>
                                       <div style='height:100%;width:25%;float:left;'>
                                             <img src='../../database/$friend_profile_pic' style='height:100%;width:100%;border-radius:50%'>
                                       </div>
 
                                       <div style='height:100%;width:30%;float:left;margin-left:5px;overflow:hidden'>
                                             <p style='font:20px impact;'>$friend_user_name<small>($friend_status)</small></p>
                                             <p style='font:15px impact;opacity:0.8;color:grey'>$friend_name<br>$friend_description</p>
                                       </div>
                                       <div style='float:right;margin-right:10px;height:100%;width:30%;margin-top:40px'>
                                            <button type='button' id='share_post' onclick=send($friend_id,$post_id,'$post_user_name')>share</button>
                                       </div>
                                 </div>";
                     
                        }

                      echo"</div>";               
                


?>

<?php include('footer/footer.php'); ?>

</body>

</html>


