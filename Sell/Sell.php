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
?>

<html style="background-color:Gray; background: url(../Image/rent.jpg) left top repeat;
    padding: 15px;">
 
 <style>
img {
    border-radius: 100%;
	
}

input[type=text] {
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
  <!-- Selling ID<br>
  <input type="text" name="Sell_id" >
  <br> -->
  User ID<br>
  <input type="text" name="Uid" >
  <br>
Society ID<br>
  <input type="text" name="Sid" >
  <br>
  House ID<br>
  <input type="text" name="Hid" >
  <br>
  Society Name<br>
  <input type="text" name="Society_Name" >
  <br>
  Sell Price<br>
  <input type="text" name="Sell_Price" >
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Sell">
</form> 

<?php
//Step2
if($_GET['submit'])
{
// $sellid = $_GET['Sell_id'];
$uid = $_GET['Uid'];
$sid = $_GET['Sid'];
$hid = $_GET['Hid'];
$Sname = $_GET['Society_Name'];
$price = $_GET['Sell_Price'];
if($uid!="" &&  $sid!="" &&  $hid!="" && $Sname!="" && $Sname!="")
{
$query = "INSERT INTO sell(UID, HID, SID, SOCIETY_NAME, SELL_PRICE) VALUES('$uid', '$hid','$sid','$Sname', '$price' )";
$data = mysqli_query($conn, $query);

if($data)
{
	echo "Data inserted into Database";
}
}
else
{
	echo "All fields are required";
}
}
?>
<br><br><br><br>
<a href="selldisplay.php">Show details</a>
<a href="../Admin/adminindex.php" >Back To Menu</a>
</html>