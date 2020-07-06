<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "forms";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $id = $_POST['id'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
           
   // mysql query to Update data
   $query = "UPDATE `users` SET `fname`='".$fname."',`lname`='".$lname."' WHERE `id` = $id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Updated';
   }
   mysqli_close($connect);
}

?>