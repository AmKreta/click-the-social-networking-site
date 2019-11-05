<!DOCTYPE html>

<?php 
     SESSION_START();
?>

<html>
     <head>
          <title><?php echo "welcome " ;echo $_SESSION["user_name"]; ?></title>

          <style>
              button{text-align:center;
                  font:20px impact;
                  color:rgb(0,133,161);
                  background-color:white;
                  border:1px solid rgb(0,133,161);
                  border-radius:25px;
                  width:162px;} 
              button:hover{color:white;
                  background-color:rgb(0,133,161);
                  border:1px solid rgb(255,255,255);} 
         </style>

          <script src='../../include/jquery/jquery.js'> </script>  <!--including jquery --> 
          
          <script>
                
             
               function add_post()
                                     {
                                       $('#post_media').click();
                                       if(($('#post_media').val()).length>0)
                                          document.getElementById('button_add_image').innerHTML='media added (click to change)';
                                     }//form in post.php
               $(document).ready(function(){
                                            $.get("add_post.php",function(data,status){document.getElementById('add_post').innerHTML=data;})
                                          //  $.get("../../stories/stories.php",function(data,status){document.getElementById('stories').innerHtml=data;})
                                            $.get("feeds.php",function(data,status){document.getElementById('feeds').innerHTML=data;})
                                             $('#comment').click(function(event){console.log('123');})
                                             
                                            }
               
                                )
               $(document).on('click','.feeds_info',(function(event)
                                                             {
                                                                window.open("../../portfolio/portfolio.php?profile_id="+$(this).attr('id'));
                                                              }))
          </script>
     </head>

     <body>
           <!--start of header -->
            <?php include("header/header.php"); ?>
           <!--end of header -->

           <!--start of stories-->
            <div class="stories" style="width:100%;height:140px;margin-top:4%;overflow:auto;white-space:nowrap;scrollbar-width:thin;scrollbar-color:rgb(0,133,161) white">                      


               </div>
           <!--end of stories-->
   
           <!--start of post something-->
               <div id='add_post' align='center' style="width:80%;margin-left:9%;margin-right:9%;height:400px;background-color:rgb(0,133,161);border-radius:25px;">
                       
               </div>
           <!--end of post something-->
                        
           <!--start of feeds-->
               
                 <div align='center' id='feeds'  style="width:77%;margin-left:9%;margin-right:9%;height:auto;margin-top:20px;margin-bottom:20px;
                                                        background-color:rgb(0,133,161);border-radius:25px;padding:20px"> 
 
                      
                 </div>
 
          <!--end of feeds-->
 
          <!--start of footer-->         
                <?php include("footer/footer.php"); ?>
          <!--end of footer-->
    </body>

</html>
