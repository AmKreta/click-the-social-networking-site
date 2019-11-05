<?php session_start(); ?>

<html>
     <head> 
              <title>setting</title>
              <script src='../include/jquery/jquery.js'></script>
              <style>
                     button{background-color:rgb(0,133,161);
                                 color:white;
                                 font:20px impact;
                                 border-radius:25px;}
                     button:hover{color:rgb(0,133,161);
                                        background-color:white;
                                        border:2px solid rgb(0,133,161);}

              </style>
              <script>
                      $(document).ready(function(){
                                                    $('#change_user_name_button').click(function(){
                                                                                             var data=$('#change_user_name_form :input').serializeArray();
                                                                                             $.post('change_user_name.php',data,function(info){alert(info);})
                                                                                           
                                                                                           })
                                                    $.get(('add_more_info_header.php'),function(data,status){document.getElementById('heading').innerHTML=data;});
                                                    $('#insert').click(function(event)
                                                                       { console.log('ll');
                                                                         event.preventDefault();
                                                                         var data=$("#myform :input").serializeArray();
                                                                         $.post($('#myform').attr('action'),data,function(data){window.alert(data);})
                                                                         $('#reset').click();
                                                                       });
                                                    $.get(('friends_suggestion.php'),function(data,status){document.getElementById('friend_suggestion').innerHTML=data;})
                                            $.get(('pending_request.php'),function(data,status){document.getElementById('pending_friend_request').innerHTML=data;})
                                                    
                                                   })
                    $(document).on('click','.user_info',(function(event)
                                                             {
                                                                window.open("../portfolio/portfolio.php?profile_id="+$(this).attr('id'));
                                                              }))
                      
              </script>
     </head>

     <body>
             <?php include("header/header.php")?>
 
             <!--portfolio-->
            
             <!--friends suggestion-->
                    <div id='friend_suggestion' style="height:auto;width:80%;background-color:rgb(0,133,161);border-radius:25px;margin-top:20px;margin-left:auto;margin-right:auto;padding:15px;overflow-y:scroll">
                        
                   </div>

                   <div id='pending_friend_request' style="height:auto;width:80%;background-color:rgb(0,133,161);border-radius:25px;margin-top:20px;margin-left:auto;margin-right:auto;padding:15px;overflow-y:scroll;">
 
                   </div> 
             <!--change profile pic-->
                <div align='center' class='change_dp' style="height:150px;width:80%;background-color:rgb(0,133,161);border-radius:25px;margin-top:20px;margin-left:auto;margin-right:auto;padding:15px;"> 
                    <p style="font:30px impact;background-color:white;border-radius:25px;color:rgb(0,133,161);width:50%">Change Dp...</p>
                                   
                                   <div style="background-color:white;border-radius:25px;width:50%;padding:10px;"> 
                                     <button type='button' id='new_avatar' onclick="window.open('change_dp_avatar.php')">New Avatar</input>
                                     <button type='button' id='from_uploaded' onclick="window.open('change_dp_uploaded.php')">From Uploaded</input>
                                     <button type='button' id='new_file' onclick="window.open('change_dp_new.php')">Upload New File</input>
                                   </div>
                </div>
             <!--change user name--> 
 
                <div align='center' style="height:150px;width:80%;background-color:rgb(0,133,161);border-radius:25px;margin-top:20px;margin-left:auto;margin-right:auto;padding:15px;">
                        <form id='change_user_name_form' action='change_user_name.php' method='post'>
                               <h1 style="font:30px impact;background-color:white;border-radius:25px;color:rgb(0,133,161);width:50%">Change User Name</h1>
                               <input type='text' name='user_name' id='user_name' placeholder="new user name"></input>
                               <button type='button' id='change_user_name_button'>change</button>
                        </form>
                </div>    

             <!--friend-list-->

             <!--Add more information(optional)-->
             <div id="add_more_info" align='center' style="height:auto;width:40%;background-color:rgb(0,133,161);margin:20px;padding:20px;border-radius:25px;margin-left:auto;margin-right:auto">
                               
                      <p id='heading' style="color:white;font:30px impact;">Add more info..</p>
			    
                            <form method='post' id='myform' action='upload_info.php' style='margin-top:20px'>
				    <input type='text' id='school' name='school' placeholder='enter the name of your school(optional)'></input><br><br>
				    <input type='text' id='college' name='college' placeholder='enter the name of your college(optional)'></input><br><br>
				    <input type='text' id='location' name='location' placeholder='enter your location(optional)'></input><br><br>
				    <input type='text' id='fav_place' name='fav_place' placeholder='enter favoriate place(optional)'></input><br><br>
				    <input type='text' id='hobby' name='hobby' placeholder='enter hobby'></input><br><br>
				    <button type='submit' id='insert' name='insert'>SUBMIT</button> <button type='reset' id='reset'>RESET</button>
			    </form>
                            

             </div>

<br><br>


             <?php include("footer/footer.php")  ?>
     </body>

</html>
