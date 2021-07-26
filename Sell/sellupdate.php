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
 $_GET['sellid'];
 $_GET['uid'];
 $_GET['sid'];
 $_GET['hid'];
 $_GET['sname'];
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
<img src="../Image/selllogo.png" alt="Front" width="15%" height="150">



<h2>SELL</h2>

<form method="GET" action="">
  User ID<br>
  <input type="text" name="Sell_id" value="<?php echo $_GET['sellid']; ?>"/><br>
  <br>
  User Name<br>
  <input type="text" name="Uid" value="<?php echo $_GET['uid']; ?>"/><br>
  <br>
House Number<br>
  <input type="text" name="Sid" value="<?php echo $_GET['sid']; ?>"/><br>
  <br>
  Society Name<br>
  <input type="text" name="Hid" value="<?php echo $_GET['hid']; ?>"/><br>
  <br>
  Login ID<br>
  <input type="text" name="Society_Name" value="<?php echo $_GET['sname']; ?>"/><br>
  <br>
  Password<br>
  <input type="text" name="Sell_Price" value="<?php echo $_GET['price']; ?>"/><br>
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Update">
</form> 

<?php
//Step2
if($_GET['submit'])
{
	$sellid = $_GET['Sell_id'];
    $uid = $_GET['Uid'];
    $sid = $_GET['Sid'];
    $hid = $_GET['Hid'];
	$sname = $_GET['Society_Name'];
	$price = $_GET['Sell_Price'];
	$query = "UPDATE SELL SET Uid='$uid' , Sid='$sid' , Hid='$hid', Society_Name='$sname', Sell_Price='$price' WHERE Sell_id='$sellid' ";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "<font color='green'>Record updated successfully; <a href='selldisplay.php'>Check updated records here</a>";
	}
	else{
		echo "<font color='white'>Record not updated.<a href='selldisplay.php'>Check updated records here</a>";
	}
}
else{
	echo "<font color='red'>Click on update button to save the changes";
}
?>
<br><br><br><br>
<a href="../Admin/adminindex.php" >Back To Menu</a>
</html>