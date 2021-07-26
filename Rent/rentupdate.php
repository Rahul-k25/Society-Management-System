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
 $_GET['rid'];
 $_GET['uid'];
 $_GET['hid'];
 $_GET['name'];
 $_GET['price'];
?>

<html style="background-color:Gray; background: url(../Image/rent.jpg) left top repeat;
    padding: 15px;">
 
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
<img src="../Image/rentlogo.jpg" alt="Front" width="20%" height="100">




<h2>RENT</h2>

<form method="GET" action="">
  Rent ID<br>
  <input type="text" name="Rid" value="<?php echo $_GET['rid']; ?>"/><br>
  <br>
  User ID<br>
  <input type="text" name="Uid" value="<?php echo $_GET['uid']; ?>"/><br>
  <br>
House ID<br>
  <input type="text" name="Hid" value="<?php echo $_GET['hid']; ?>"/><br>
  <br>
  Society Name<br>
  <input type="text" name="Society_Name" value="<?php echo $_GET['name']; ?>"/><br>
  <br>
  Rent Amount<br>
  <input type="text" name="Rent_Price" value="<?php echo $_GET['price']; ?>"/><br>
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Update">
</form> 

<?php
//Step2
if($_GET['submit'])
{
	$rid = $_GET['Rid'];
    $uid = $_GET['Uid'];
    $hid = $_GET['Hid'];
    $name = $_GET['Society_Name'];
	$price = $_GET['Rent_Price'];
	$query = "UPDATE RENT SET Uid='$uid' , Hid='$hid' , Society_Name='$name', Rent_Price='$price' WHERE Rid='$rid' ";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "<font color='green'>Record updated successfully; <a href='rentdisplay.php'>Check updated records here</a>";
	}
	else{
		echo "<font color='white'>Record not updated.<a href='rentdisplay.php'>Check updated records here</a>";
	}
}
else{
	echo "<font color='red'>Click on update button to save the changes";
}
?>
<br><br><br><br>
<a href="../Admin/adminindex.php" >Back To Menu</a>
</html>