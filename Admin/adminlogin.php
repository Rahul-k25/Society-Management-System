<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 
 if($conn)
 {
	 echo "";
 }
 else
 {
	 die("Connection failed because ".mysqli_connect_error());
 }
 error_reporting(0);
?>

<html style="background-color:Gray; background: url(Image/s7.jpg) left top repeat;
    padding: 15px;">
 <head>
 </head>
 
<style>
img {
    border-radius: 90%;
	
}

input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px;
    box-sizing: border-box;
    border: none;
    background-color: skyblue;
    color: black;
}

input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: skyblue;
    color: black;
}

a {
    background-color:orange;
  color: black;
  padding: 1em 1.5em;
  text-decoration: none;
  text-transform: uppercase;
}

a:hover {
  background-color: skyblue;
}

.button {
    background-color: #4682B4 ;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button:hover {
    background-color:#4CAF50;
    color: black;
}

</style>
 <div align="center" font color="red">
<font color="black">
<head>
  <title>Welcome to society management system</title>
  <h1 >SOCIETY MANAGEMENT SYSTEM </h1>
  
</head>
<body>

<div class="container">
<img src="adminlogo.png" alt="Front" width="20%" height="200"> 

<style>
img {
    -webkit-filter: blur(1px); /* Safari 6.0 - 9.0 */
    filter: blur(0px);
}
</style>
</div>
 
<div style="width:50%; margin:auto;">
  <div style="display:inline-block; width:45%;text-align:center;">
<h2>ADMIN PANEL</h2>

<form method="post" action="">
  Admin ID:<br>
  <input type="text" placeholder="admin id" name="admin_id">
  <br>
  Password:<br>
  <input type="password" placeholder="password" name="password" >
  <br><br>
  <input type="submit" class="button" name="submit" value="Login">
  <br>
</form> 

</div>

</div>

<?php

if(isset($_POST['submit']))
{
	$admin = $_POST['admin_id'];
	$pass = $_POST['password'];
	$query = "SELECT * FROM ADMIN WHERE admin_id='$admin' && password='$pass'";
  $data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['adminid']=$admin;
		header('location:adminindex.php');
	
	}
	else{
		echo "Admin ID or Password incorrect";
	}
}
?>

<br><br><br>
<a href="../start.php" >Back</a>

