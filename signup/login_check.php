
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

                  $user_name=test_input($_POST["user_name"]);
                  $password=test_input($_POST["password"]); 
 
                  include("../include/php/include.php");
 
     		      $sql="select user_password,user_id from click.user_list where user_user_name='$user_name'";
	    	      $result=mysqli_query($conn,$sql);
                  if($result)
                     { 
                       $result=mysqli_fetch_assoc($result); 
		       if(strcmp($result['user_password'],$password)==0 && strlen($user_name)!=0)
                         {    
			    session_start();
	                    $_SESSION["user_id"]=$result["user_id"];
                            $_SESSION["user_name"]=$user_name;
                            $sql="update click.user_list set user_status='online' where user_user_name='$user_name'";
                            $res=mysqli_query($conn,$sql);
		            header('Location:../home/index/index.php');
		        }
                       else
                          {
                           header('location:signup_form2.php');
                          }
                      }
                        
		  else 
      	              { 
                        header('location:signup_form2.php');
                      }
                    
             ?>
      </body>
</html>
