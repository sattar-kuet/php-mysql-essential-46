<?php
session_start();
include('header.php'); 
include('../helper/function.php'); 
include('../database/connect.php');

if(!isset($_SESSION['user']['id'])){
  header('Location:login.php');
}
?>