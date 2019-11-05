<html>
     <body>
<?php

function test_input($data) 
           {
             $data = trim($data);
             $data = stripslashes($data);
             $data = htmlspecialchars($data);
             return $data;
           }

$first_name=test_input($_POST["first_name"]);
$middle_name=test_input($_POST["middle_name"]);
$last_name=test_input($_POST["last_name"]);

$user_name=test_input($_POST["user_name"]);

$gender=test_input($_POST["gender"]);

$e_mail=test_input($_POST["email"]);

$phone_no=test_input($_POST["phoneno"]);

$dob=test_input($_POST["dob"]);

$description=test_input($_POST["description"]);

$password=test_input($_POST["password1"]);

include("../include/php/include.php");

 $sql="insert into click.user_list(user_first_name,user_middle_name,user_last_name,user_user_name,user_e_mail,user_phone_no,user_gender,user_password,user_dob,user_description)
        values('$first_name','$middle_name','$last_name','$user_name','$e_mail','$phone_no','$gender','$password','$dob','$description')";
  
$result=mysqli_query($conn,$sql);
      if($result)
         {
           $sql="select * from click.user_list where user_user_name='$user_name'";
           $res=mysqli_fetch_assoc(mysqli_query($conn,$sql));
           session_start();
           $_SESSION["id"]=$res["user_id"];
           $_SESSION["user_name"]=$res["user_user_name"];
           
           header('Location:../home/index/index.php');
         }
      else
        echo mysqli_error($conn);
?>


      </body>
</html>
