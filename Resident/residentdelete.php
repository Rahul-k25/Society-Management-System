<?php
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
 
 $usid=$_GET['uid'];
 $query = "DELETE FROM user WHERE Uid='$usid'";
 $data= mysqli_query($conn, $query);
 
 if($data){
	 echo"<script>alert('Record Deleted Successfully')</script>";
	 ?>
	 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Society-Database-Management-System-master/Resident/residentdisplay.php">;
	 <?php
 }
 else{
	 echo "<font color='red'>Sorry, Delete process failed";
 }
 
 
 
	 ?>
	 
	 