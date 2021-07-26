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
 $_GET['cid'];
 $_GET['uid'];
 $_GET['sub'];
 $_GET['complaint'];
?>

<html style="background-color:Gray; background: url(s4.jpg) left top repeat;
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
    color: black;
    
}

input[type=password] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
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
<img src="s5.jpg" alt="Front" width="50%" height="300">




<h2>COMPLAINTS</h2>

<form method="GET" action="">
  Complaint ID<br>
  <input type="text" name="Cid" value="<?php echo $_GET['cid']; ?>"/><br>
  <br>
  User ID<br>
  <input type="text" name="Uid" value="<?php echo $_GET['uid']; ?>"/><br>
  <br>
Subject<br>
  <input type="text" name="Subject" value="<?php echo $_GET['sub']; ?>"/><br>
  <br>
  Complaint<br>
  <input type="text" name="Complaint" value="<?php echo $_GET['complaint']; ?>"/><br>
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Update">
</form> 

<?php
//Step2
if($_GET['submit'])
{
	$cid = $_GET['Cid'];
    $uid = $_GET['Uid'];
    $sub = $_GET['Subject'];
    $complaint = $_GET['Complaint'];
	$query = "UPDATE COMPLAINTS SET Uid='$uid' , Subject='$sub' , Complaint='$complaint' WHERE Cid='$cid' ";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "<font color='green'>Record updated successfully; <a href='complaintsdisplay.php'>Check updated records here</a>";
	}
	else{
		echo "<font color='black'>Record not updated.<a href='complaintsdisplay.php'>Check updated records here</a>";
	}
}
else{
	echo "<font color='red'>Click on update button to save the changes";
}
?>
<br>
<a href="userindex.php" >Back To Menu</a>
</html>