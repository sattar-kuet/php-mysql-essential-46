<?php
include('../../database/connect.php');
include('../../helper/function.php');

 extract($_POST);

 $password = sha1($password);


   $sql = "INSERT INTO users (name,district,email,password) VALUES('$name', '$district','$email','$password')";
   $status = mysqli_query($connection,$sql);
   if($status)
   {
   	 echo 'Insert Successful!';
   }
   else{
   	 echo 'Error in data insertion';
   }
 

?>