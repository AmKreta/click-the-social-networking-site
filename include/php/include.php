<?php
 $server='localhost';
 $user='phpmyadmin';
 $pass='Am_Kreta'; 
 $db='click';
 $conn=mysqli_connect($server,$user,$pass,$db);

 if(!$conn)
  {
    die('connection failed:'.mysqli_connect_error());
  }
?>
