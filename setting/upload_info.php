<?php session_start(); ?>

<?php

include("../include/php/include.php");

function test_input($data)
          { 
           return htmlspecialchars(stripslashes(trim($data)));
          }
$user_id=$_SESSION["user_id"];

$school=test_input($_POST['school']);
$college=test_input($_POST['college']);
$location=test_input($_POST['location']);
$fav_place=test_input($_POST['fav_place']);
$hobby=test_input($_POST['hobby']);

$sql="select count(*) from click.user_additional_information where user_id='$user_id'";
$result=mysqli_fetch_assoc(mysqli_query($conn,$sql));
 
    
if(sizeof($result)==0)//if there is no entey insert
   {
     if(strlen($school)==0 && strlen($college)==0 && strlen($location)==0 && strlen($fav_place)==0 && strlen($hobby)==0)//check if none of columns is filled
       {
        $sql="insert into click.user_additional_information (user_school,user_college,user_location,user_fav_place,user_hobby,user_id)        values('$school','$college','$location','$fav_place','$hobby','$user_id')";
      $result=mysqli_query($conn,$sql);

     if($result)
        echo "entered sucessfully";
     else
        echo "error enter again".mysqli_error($conn);
      }
     else "enter atleast one info.";
  }

else{  //else update the entry

      if(strlen($school)!=0)
                     {
                       $sql="update click.user_additional_information set user_school='$school'";
                       $result=mysqli_query($conn,$sql);
                       if($result)
                           echo "school  ";
                       else
                           echo mysqli_error($conn);
                     }
      
      if(strlen($college)!=0)
                     {
                       $sql="update click.user_additional_information set user_college='$college'";
                       $result=mysqli_query($conn,$sql);
                       if($result)
                           echo "college  ";
                       else
                           echo mysqli_error($conn);
                     }

      if(strlen($location)!=0)
                     {
                       $sql="update click.user_additional_information set user_location='$location'";
                       $result=mysqli_query($conn,$sql);
                       if($result)
                           echo "location  ";
                       else
                           echo mysqli_error($conn);
                     }

      if(strlen($fav_place)!=0)
                     {
                       $sql="update click.user_additional_information set user_fav_place='$fav_place'";
                       $result=mysqli_query($conn,$sql);
                       if($result)
                           echo "favoriate place  ";
                       else
                           echo mysqli_error($conn);
                     }
 
      if(strlen($hobby)!=0)
                     {
                       $sql="update click.user_additional_information set user_hobby='$hibby'";
                       $result=mysqli_query($conn,$sql);
                       if($result)
                           echo "hobby  ";
                       else
                           echo mysqli_error($conn);
                     }
      echo"updated";    
    }
    

?>
