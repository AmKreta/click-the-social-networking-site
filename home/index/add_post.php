<?php session_start(); ?>
<?php
    $user_id=$_SESSION['user_id'];
      echo"<style>
                     .add_post_new_post button{background-color:rgb(255,255,255);
                                      width:auto;
                                      height:35px;
                                      font:20px impact;
                                      color:rgb(0,133,161);
                                      border-radius:25px;
                                      margin:15px;}
                     .add_post_new_post button:hover{background-color:rgb(0,133,161);
                                             color:rgb(255,255,255)
                                             }
                   </style>"

                            ;   //echoing style
                
       include("../../include/php/include.php");
      
       $user_id=$_SESSION['user_id'];
       $sql="select user_profile_pic from click.user_list where user_id='$user_id'";
       $res=mysqli_fetch_assoc(mysqli_query($conn,$sql))["user_profile_pic"];
       if($res=='none')
             $res='';
              echo"<div class='add_post_profile_pic' align='center'>
                      <img class='feeds_info' id='$user_id' src='../../database/$res' alt='image not available' style='height:150px;width:150px;border-radius:50%;border:10px solid rgb(0,133,161);margin-top:-8%'>
                   </div>
                
                   <div class='add_post_new_post' align='center' style='border-radius:5%;background-color:rgb(255,255,255);width:80%;height:60%;margin-left:10%;margin-right:10%'>
                      <form id='mypost' action='upload_post.php' method='post' enctype='multipart/form-data' style='height:93%;width:100%;'>
                      <textarea id='caption' name='caption' placeholder='Tell Everyone How Your Day Was...' style='border-radius:5%;resize:none;height:100%;width:98%;padding:5px;font-size:20px'></textarea>
                      <input type='hidden' id='user_id' name='user_id' value='$user_id'></input>
                      <input type='radio' name='type' id='public' value='public' checked='checked'>Public</input>
                      <input type='radio' name='type' id='private' value='private'>Private</input>
                      <input type='file' id='post_media' name='post_media' style='display:none' ></input>
                      <button type='button' id='button_add_image' onclick='add_post()'>Add media</button>
                      <button type='submit' id='submit'>POST</button>
                      </form>
                   </div>"; 

$sql="insert into "
?>

