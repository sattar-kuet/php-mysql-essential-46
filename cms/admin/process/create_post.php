<?php
session_start();
include('../../database/connect.php');
include('../../helper/function.php');
extract($_POST);
$image_name = $_FILES['image']['name'];
$destination = '../../public/uploads/'.$image_name;
move_uploaded_file($_FILES['image']['tmp_name'], $destination);

$sql ="INSERT INTO posts (title,description,image) VALUES('$title','$description','$image_name')";
$status = mysqli_query($connection,$sql);

if($status){
	$_SESSION['success_message'] = 'New Post Created Successfully!';
}else{
	$_SESSION['error_message'] = ' Problem in SQL Query';
}
header('Location:../new_post.php');
?>