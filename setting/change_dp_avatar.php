<?php session_start(); ?>

<html>
    <head>
          <title>avatar</title>

          <style>
               button{border-radius:25px;background-color:white;border:1px solid white;font:20px impact;color:rgb(0,133,161);}
               button:hover{background-color:rgb(0,133,161);color:white;border:2px solid white;}
          </style>
 
          <script src='../include/jquery/jquery.js'></script>

          <script>
                   $(document).ready(function(){
                                                  $('.image').click(function(event){$('.image').css("border","none");})
                                                  $('.image').click(function(event){
                                                                                    $(this).css("border","6px solid white");
                                                                                    $('#img_name').val($(this).attr('id'));//setting button value
                                                                                    //console.log( $('#img_name').val());
                                                                                   })
                                                 // $('#img_name').val($(this).attr('id'))
                                                })

          </script>
    </head>
 
    <body>
          <?php include('header/header.php'); ?>
 
          <div align='center' style="width:80%;background-color:rgb(0,133,161);height:500px;margin-top:20px;margin-bottom:20px;
                                     margin-left:auto;margin-right:auto;border-radius:25px;padding:20px;overflow-y:scroll;">
         
                   <div class='header' style="width:80%;font:40px impact;color:rgb(0,133,161);background-color:white;border-radius:25px;">
 
                         <p>Avatar...</p>
  
                   </div>

                   
 
                   <div class='form'> 
                          <form id='myform' method='post' action='#'>
                            <input type='hidden' id='img_name' name='img_name' value=''></input>
                            <button type='submit'>Change Dp</button>
                          </form>
                   </div>

                   <div class='album' style="width:84%;overflow:hidden">
                        
                         <?php
                               include("../include/php/include.php");
                               
                               $sql="select * from click.avatar";
                               $result=mysqli_query($conn,$sql);
                               
                               while($row=mysqli_fetch_assoc($result)) 
                                    {
                                       $path=$row["path"];
                                       
                                       echo "<div style='height:200px;width:200px;float:left;margin:10px'>
                                               <img class='image' id='$path' src='../database/$path' style='height:100%;width:100%'>
                                             </div>";
                                    }
                         ?> 
                   </div>
                   
          </div>

          <?php include('footer/footer.php'); ?>
    </body>

</html>

<?php


 
     $user_id=$_SESSION["user_id"];
     
     $img=$_POST["img_name"];
     include("../include/php/include.php");
     
     if(strlen($img)>0)
       {
     $sql="update user_list set user_profile_pic='$img' where user_id='$user_id'";
     $result=mysqli_query($conn,$sql);
     if($result)
        echo mysqli_error($conn);
     else
		echo "<script>alert('dp updated')</script>";
     }
?>

