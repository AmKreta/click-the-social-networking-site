<?php session_start();  ?>

<?php
 
  function test_input($data) 
               {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
                }
   

   $caption=test_input($_POST['caption']);
   $user_id=test_input($_POST['user_id']);
   $type=test_input($_POST['type']);

   $file=$_FILES["post_media"];
   $file_name=test_input($file['name']);
   $file_type=test_input($file['type']);
   $file_temp_loc=$file['tmp_name'];

   $file_loc="../../database/".$file_name;
 
   move_uploaded_file($file_temp_loc,$file_loc);
 
   include('../../include/php/include.php');
   if($caption!=' ' || $FILES!=NULL)
   {
   $sql="insert into click.post(post_user_id,post_media,post_caption,post_type) values('$user_id','$file_name','$caption','$type')";
   $result=mysqli_query($conn,$sql);
   }
   else
    echo "amk";
   header('location:index.php');
?>
