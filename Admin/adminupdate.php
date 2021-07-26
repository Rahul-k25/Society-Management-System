<!DOCTYPE html>

<?php
//Step1
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
 $_GET['aid'];
 $_GET['pass'];
 $_GET['name'];
 $_GET['email'];
 $_GET['mob'];
?>

<html style="background-color:Gray; background: url(../Image/bg13.jpg) left top repeat;padding: 15px;">
 
 <style>
img {
    border-radius: 90%;
	
}

input[type=text]{
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
    
}

select{
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
    
}
input[type=password] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}

a {
    background-color:orange;
  color: white;
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
    color: white;
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
    color: white;
}

</style>


	
<div align="center" font color="red">
<font color="black">
<img src="../Image/residentlogo.png" alt="Front" width="20%" height="100">



<h2>UPDATE</h2>

<form method="GET" action="">
  ADMIN ID<br>
  <input type="text" name="Aid" value="<?php echo $_GET['aid']; ?>"/><br>
  <br>
  Password<br>
  <input type="password" name="Password" value="<?php echo $_GET['pass']; ?>"/><br>
  <br>
  Admin Name<br>
  <input type="text" name="Name" value="<?php echo $_GET['name']; ?>"/><br>
  <br>
  EMAIL<br>
  <input type="text" name="Email" value="<?php echo $_GET['email']; ?>"/><br>
  <br>
  Mobile Number<br>
  <input type="text" name="Mob" value="<?php echo $_GET['mob']; ?>"/><br>
  <br>
  
  <input type="submit" class="button" name="submit" value="Update">
  <br><br>
</form> 

<?php
//Step2
if($_GET['submit'])
{
    $aid = $_GET['Aid'];
    $pass = $_GET['Password'];
    $name = $_GET['Name'];
    $email = $_GET['Email'];
    $mob = $_GET['Mob'];
  
  if($aid!= "" && $pass!="" && $name!="" && $email!="" &&  $mob!="" ){
	$query = "UPDATE ADMIN SET ADMIN_ID ='$aid', PASSWORD ='$pass', ADMIN_NAME='$name' , EMAIL='$email' , MOBILE='$mob' WHERE ADMIN_ID='$aid' ";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "<font color='green'>Record updated successfully; <a href='admindetails.php'>Check updated records here</a>";
  }
}
	else{
		echo "<font color='white'>Record not updated.<a href='admindetails.php'>Check updated records here</a>";
	}
}
else{
	echo "<font color='red'><font size=5px>Click on update button to save the changes</font size>";
}
?>
<br>
<br>
<br>
<a href="../Admin/adminindex.php" >Back To Menu</a>
</html>