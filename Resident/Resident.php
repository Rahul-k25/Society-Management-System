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
    border-radius: 90%;
	
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

</style>


	
<div align="center" font color="red">
<font color="black">
<img src="../Image/residentlogo.png" alt="Front" width="20%" height="100">

<?php

$query1 = "SELECT SNAME FROM society";
$data1 = mysqli_query($conn, $query1);
if(mysqli_num_rows($data1)>0)
{
  
  ?>
    
<form method="GET" action="">
  User Name<br>
  <input type="text" name="Name" >
  <br>
  E-mail<br>
  <input type="text" name="Email" >
  <br>
  Mobile Number<br>
  <input type="text" name="Mob" >
  <br>
  House Number<br>
  <input type="text" name="House_No" >
  <br>
  Society Name<br>
  <select name="Society_Name">
    <option value="0">Please Select Society Name</option>

      <?php
        while($ress=mysqli_fetch_assoc($data1)){
          $val=$ress['SNAME']
      ?>

    <option value="<?php echo htmlspecialchars($val); ?>">
    <?php echo htmlspecialchars($val); ?>
    </option>
    <?php 
        }
      }
    ?>
  </select>
  <!-- <input type="text" name="Society_Name" > -->
  <br>
  Login Name<br>
  <input type="text" name="Login_Name" >
  <br>
  Password<br>
  <input type="password" name="Password" >
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Add Resident">
</form> 

<?php
//Step2
if($_GET['submit'])
{
$name = $_GET['Name'];
$email= $_GET['Email'];
$Mob= $_GET['Mob'];
$hno = $_GET['House_No'];
$sname = $_GET['Society_Name'];
$lname = $_GET['Login_Name'];
$pass = $_GET['Password'];
if($name!="" && $email!="" && $Mob!="" && $hno!="" &&  $sname!="" && $lname!="" &&  $pass!="")
{
$query = "INSERT INTO user(NAME,EMAIL, MOBILE_NO, HOUSE_NO, SOCIETY_NAME, LOGIN_NAME, PASSWORD) VALUES('$name','$email','$Mob','$hno', '$sname','$lname','$pass')";
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
<a href="residentdisplay.php">Show details</a>
<a href="../Admin/adminindex.php" >Back To Menu</a>
<a href="triggersuser.php">See Residents Logs</a>
</html>