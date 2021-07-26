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

<html style="color:Gray; background: url(../Image/bg13.jpg) left top repeat;
    padding: 15px;">
 
 <style>
img {
    border-radius: 20%;
	
}

input[type=text] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: black;
}
select {
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

b{
    
}

</style>


	
<div align="center" font color="red">
<font color="black">
<img src="../Image/visitorsicon.png" alt="Front" width="20%" height="150">

<?php
$sid = $_GET['sid'];
$query1 = "SELECT SNAME FROM society where SID = $sid";
$data1 = mysqli_query($conn, $query1);
if(mysqli_num_rows($data1)>0)
{
    while($ress=mysqli_fetch_assoc($data1)){
        $val=$ress['SNAME'];
}
}
?>
<p style="font-size:150%;">SOCIETY NAME: <?php echo $val; ?></p>
<form method="GET" action="">
  Visitor Name<br>
  <input type="text" name="Name" placeholder='Name' >
  <br>
  Mobile Number<br>
  <input type="text" name="Mob" placeholder='Mob' >
  <br>
  Address<br>
  <input type="text" name="add" placeholder='Address' >
  <br>
  Whom to Meet<br>
  <input type="text" name="whomtomeet" placeholder='whomtoMeet'>
  <br>
  reason to Meet<br>
  <input type="text" name="reasontomeet" placeholder='Reason'>
  <br>
  Entry Date<br>
  <input type="text" name="date" placeholder='Date'>
  <br>
  House Number<br>
  <input type="text" name="house_no" placeholder='FlatNo'>
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Add Visitor">
</form> 

<?php
//Step2
if($_GET['submit'])
{
$name = $_GET['Name'];
$Mob= $_GET['Mob'];
$add = $_GET['add'];
$whomtomeet = $_GET['whomtomeet'];
$reason = $_GET['reasontomeet'];
$date = $_GET['date'];
$houseNo = $_GET['house_no'];
if($name!="" && $Mob!="" && $add!="" &&  $whomtomeet!="" && $reason!="" &&  $date!="" && $houseNo!="")
{
$query = "INSERT INTO visitor(VISITOR_NAME, MOBILE, ADDRESS, WHOMTOMEET, REASONTOMEET, ENTRY_DATE, HOUSE_NO) VALUES('$name','$Mob','$add', '$whomtomeet','$reason','$date', '$houseNo')";
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
<br>
<br>
<br>
<br>
<a href="../Security/securityindex.php" >Back To Menu</a>
</html>