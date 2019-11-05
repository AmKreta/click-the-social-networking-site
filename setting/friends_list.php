<?php session_start() ?>

<?php
  include("../include/php/include.php");

  $sql="select user_id,user_user_name,user_first_name,user_middle_name,user_last_name,user_profile_pic from user_list";  //optimize for better suggestion from other info
  $result=mysqli_query($conn,$sql);

  if($result)
    {
      while($row=mysqli_fetch_assoc($result))
            {

              var_dump($row);
            }
    }

?>
