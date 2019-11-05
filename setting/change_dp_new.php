<?php session_start(); ?>

<html>
    <head>
          <title>new dp upload</title>

          <style>
               button{border-radius:25px;background-color:white;border:1px solid white;font:20px impact;color:rgb(0,133,161);}
               button:hover{background-color:rgb(0,133,161);color:white;border:2px solid white;}
               #browse{border-radius:25px;background-color:white;border:1px solid white;font:20px impact;color:rgb(0,133,161);}
               #browse:hover{background-color:rgb(0,133,161);color:white;border:2px solid white;}
          </style>
 
          <script src='../include/jquery/jquery.js'></script>

          <script>
                   $(document).ready(function(){
                                                  console.log($('#browse').val());
                                                })

          </script>
    </head>
 
    <body>
          <?php include('header/header.php'); ?>
 
          <div align='center' style="width:80%;background-color:rgb(0,133,161);height:300px;margin-top:20px;margin-bottom:20px;
                                     margin-left:auto;margin-right:auto;border-radius:25px;padding:20px;overflow-y:scroll;">
              <h1> Upload New Dp </h1>
              <form action='#' method='post' enctype='multipart/form-data'>
                  <input id='browse' name='image' type='file'></input><br><br>
                  <button type='submit'>Update Dp</button>
              </form>    
          </div>

          <?php include('footer/footer.php'); ?>
    </body>

</html>

<?php


 
     $user_id=$_SESSION["user_id"];
     
     $img=$_FILES['image'];
     include("../include/php/include.php");

     
     if(strncmp($img['type'],'image/',6)==0)
        {
	     $name=$img['name'];
	     $temp_loc=$img['tmp_name'];

             $loc='../database/'.$name;


             move_uploaded_file($temp_loc,$loc);

	     $sql="update user_list set user_profile_pic='$name' where user_id='$user_id'";
	     $result=mysqli_query($conn,$sql);
	     if(!$result)
		echo mysqli_error($conn);
	     else
		echo "<script>alert('dp updated')</script>";
      }
   
?>

