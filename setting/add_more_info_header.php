<?php session_start(); ?>

<?php
    $user_id=$_SESSION["user_id"];
    
     include("../include/php/include.php");

     $sql="select count(*) from click.user_additional_information where user_id='$user_id'";
     $result=mysqli_fetch_assoc(mysqli_query($conn,$sql));

     if(sizeof($result)==1)
       echo "update details";
     else 
       echo "add more details";

?>
