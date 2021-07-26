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
 
 $sd=$_GET['sid'];
 $query = "DELETE FROM society WHERE SID='$sd'";
 $data= mysqli_query($conn, $query);
 
 if($data>0){
	 echo"<script>alert('Record Deleted Successfully')</script>";
	 ?>
	 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Society-Database-Management-System-master/Society/societydisplay.php">;
	 <?php
 }
 else{
	 echo "<font color='red'>Sorry, Delete process failed";
 }
 
 
 
	 ?>
	 
	 