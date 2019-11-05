<?php session_start();?>
<html>
     <head>
           <title>Chat</title>
           <link rel="stylesheet" type="text/css" href="../include/bootstrap/css/bootstrap.min.css">
           <script src='../include/jquery/jquery.js'> </script>  <!--including jquery -->
           <script>
                     $(document).on('click','.user_info',(function(event)
                                                             {
                                                                window.open("../portfolio/portfolio.php?profile_id="+$(this).attr('id'));
                                                              }))
                     $(document).ready(function()
                                           {
                                              $('.friends').click(function(event)
                                                                  {
                                                                      var chat_id=[{name:'chat_id',value:this.id}];console.log(chat_id);
                                                                      $('#receiver_id').val(this.id);//set receiver id to the clicked profile
                                                             $.post('load_header.php',chat_id,function(info){document.getElementById('chat_area_header').innerHTML=info;})
                                                                      //setInterval(function(){$.post('load_message.php',chat_id,function(info){document.getElementById('chat_area_chat').innerHTML=info;});},1000);
                                                                      setInterval(function(){$('#chat_area_chat').load('load_message.php',chat_id);},2000);
                                                                  });
                                              $('#send').click(function(event)
                                                                  {
                                                                     var data=$('#chat :input').serializeArray();
                                                                     console.log(data);
                                                               $.post('send_message.php',data,function(info){});
                                                                      $('#message').val('');
                                                                  });
                                            
                                           })
           </script>
     </head>

     <body>
           <?php include("header/header.php");?>
           
                <div class='chatbox' style="width:80%;height:500px;margin:10px;background-color:rgb(0,133,161);margin-right:10%;margin-left:10%">
    
                    <div class='chat_list' style='background-color:rgb(255,255,255);float:left;width:31%;height:96%;margin:1%;'>
                          
                          <div class='chat_list_header' style="width:98%;height:15%;margin:3px;background-color:rgb(0,133,161)">
                                <p style="font-family:impact;font-size:44px;color:rgb(255,255,255);margin-left:20%;margin-right:20%;">chat-list</p>
                          </div>

                 <?php
                   $user_id=$_SESSION['user_id'];
  
                   include('../include/php/include.php');

                   $sql="select * 
                          from click.friend_request_information
                          where friend_request_sender_id=$user_id or friend_request_receiver_id=$user_id and friend_request_response='friends'";
                   $result=mysqli_query($conn,$sql);  
                  

                    echo" <div class='chat_list_friends' style='overflow-y:scroll;height:83%;width:98%;border:1px solid rgb(0,133,161);margin:3px'>"; 

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
                           
                           echo "<div style='margin:10px;height:95px;width:94%;overflow:hidden' class='friends' id='$friend_id'>
                                       <div style='height:100%;width:30%;float:left;'>
                                             <img src='../database/$friend_profile_pic' style='height:100%;width:100%;border-radius:50%'>
                                       </div>
 
                                       <div style='height:100%;width:66%;float:left;margin-left:5px;margin-top:20px;overflow:hidden'>
                                             <p style='font:20px impact;'>$friend_user_name<small>($friend_status)</small></p>
                                             <p style='font:15px impact;opacity:0.6;color:grey'>$friend_name</p>
                                       </div>
                                 </div><hr>";
                        }

                      echo"</div>";       //-------------------------------------------end of chat list-------------------------------------------------------           
                ?>

                    </div>  <!------------------------------------------------------------end of chatbox----------------------------------------------------->
                   
                     
                    <div class='chat_area' style='background-color:rgb(255,255,255);float:right;width:65%;height:96%;margin:1%;'>
                         
                          <div id='chat_area_header' style="width:99%;height:15%;margin:3px;background-color:rgb(0,133,161)">
                             
                          </div>

                          <div id='chat_area_chat' style="width:99%;height:73%;margin:3px;overflow-y:scroll;vertical-align:bottom">
                              
                          </div>

                          <div class='chat_area_footer' style="width:99%;border:1px solid rgb(0,133,161);height:10%;margin:3px;">
                               
                               <form action="send_message.php" id='chat' method='post'>
                                      <input type='hidden' id='receiver_id' name='receiver_id' value='nil'></input>
                                      <textarea style="height:100%;width:93%;" name="message" id="message"></textarea>                               
                                      <button style="width:7%;height:100%;float:right;color:rgb(0,133,161)" type='button' id='send'>send</button>
                               </form>

                          </div>    
                         
                    </div>

               </div>

                         

           
        
           <?php include("footer/footer.php");?>
     </body>
</html> 
