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
 $_GET['sname'];
 $_GET['sid'];
 $_GET['add'];
 $_GET['houses'];
?>

<html style="background-color:Gray;
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
<font color="white">
<img src="../Image/societylogo.png" alt="Front" width="20%" height="100">




<h2>SOCIETY</h2>

<form method="GET" action="">
  <b>Society Name</b><br>
  <input type="text" name="Sname" value="<?php echo $_GET['sname']; ?>"/><br>
  <br>
  <b>SID</b><br>
  <input type="text" name="Sid" value="<?php echo $_GET['sid']; ?>"/><br>
  <br>
  <b>Address</b><br>
  <input type="text" name="Address" value="<?php echo $_GET['add']; ?>"/><br>
  <br>
  <b>No. of Houses</b><br>
  <input type="text" name="No_of_houses" value="<?php echo $_GET['houses']; ?>"/><br>
  <br>
  <input type="submit" class="button" name="submit" value="Update">
  <br>
  <br>
</form> 

<?php
//Step2
if($_GET['submit'])
{
	$sname = $_GET['Sname'];
    $sid = $_GET['Sid'];
    $add = $_GET['Address'];
    $houses = $_GET['No_of_houses'];
	$query = "UPDATE society SET SNAME='$sname' , ADDRESS='$add' , NO_OF_HOUSE='$houses' WHERE SID='$sid' ";
	$data = mysqli_query($conn, $query);
	if($data){
    echo "<font color='green'>Record updated successfully.";
    echo "<a href='societydisplay.php'>Check updated records here.<br></a>";
	}
	else{
    echo "<font color='white'>Record not updated.";
    echo "<a href='societydisplay.php'>Check updated records here <br></a>";
	}
}

else{
	echo "<font color='red'>Click on update button to save the changes";
}
?>
<br>
<br>
<br>
<a href="../Admin/adminindex.php" >Back To Menu</a>
</html>