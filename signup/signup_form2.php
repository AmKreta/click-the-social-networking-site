<!DOCTYPE html>
<html>

    <head>

          <title>CLICK</title>

          <link rel='stylesheet' href='../include/bootstrap/css/bootstrap.min.css'>

           <script src='../include/jquery/jquery.js'> </script>  <!--including jquery -->
           

           <script src="validation_signupform.js">  </script>
          
           <script>alert('enter valid e-mail and password');</script>


    </head>
    
    <body style="background-image:url('bodybc.jpg');color:rgb(255,255,255);">

    <?php include('header/header.php') ?>

    <div class='container'>

        <div class='row'>

            <div class='col-md-6'>

                  <h1><br>Sign Up</h1>

                  <form action="add_user.php" id="myform" method="post" enctype="multipart/form-data"><br><br>

		          <input type='text' name="first_name" id="first_name" placeholder="First Name"></input> 
		          <input type='text' name="middle_name" id="middle_name" placeholder="Middle Name(optional)"></input><br><br>
                          <input type='text' name="last_name" id="last_name" placeholder="Last Name"></input>

		          <input type='text' name="user_name" id="user_name" placeholder="User Name(unique)"></input><br><br>

		          <b>Gender:<input type='radio' name="gender" id="male" value="male" checked='checked'>male</input>
		                    <input type='radio' name="gender" if="female" value="female">female</input><br><br></b>
		          
		          <b>Date Of Birth:&nbsp </b><input type="date" name="dob" id="dob"></input><br><br>

		          <input type='e-mail' name="email" id="email" placeholder="E-mail"></input>

		          <input type='text' name="phoneno" id="phoneno" placeholder="Phone no."></input><br><br>

		          <input type='password' name="password1" id="password1" placeholder="password"></input>
		          <input type='password' name="password2" id="password2" placeholder="enter password again"></input><br><br>

		          <textarea name="description" id="description" placeholder="add your description(optional)" style="height:100px;width:248px;resize:none"></textarea><br><br> 
                          <button type="submit" id="submit" style="display:none"></button>
		          <button type='button' id="insert" value="send" onclick='validation()'>Sign Up</button>
		          <button Type='reset'>Reset</button><br><br>

                  </form>
     
         </div>

    </div>
  
 </div>
         
    <?php include('footer/footer.php') ?>

    </body>

</html>
