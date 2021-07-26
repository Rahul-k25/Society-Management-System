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

<html style="background-color:Gray; background: url(../Image/bg11.jpg) left top repeat;
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
    color: white;
}

select {
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
<img src="../Image/houselogo.png" alt="Front" width="20%" height="100">


<?php

$query1 = "SELECT SNAME FROM society";
$data1 = mysqli_query($conn, $query1);
if(mysqli_num_rows($data1)>0)
{
  
  ?>


<h2>HOUSE</h2>

<form method="GET" action="">
  Block<br>
  <input type="text" name="Block_no" >
  <br>
  House Type<br>
  <select name="Type">
    <option value="1BHK">1BHK</option>
    <option value="2BHK">2BHK</option>
    <option value="3BHK">3BHK</option>
    <option value="4BHK">4BHK</option>
  </select>
  <!-- <input type="text" name="Type" > -->
  <br>
  Society Name<br>
  <select name="Sname">
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
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Add House">
</form> 

<?php
//Step2
if($_GET['submit'])
{
$sname = $_GET['Sname'];
$block = $_GET['Block_no'];
$type = $_GET['Type'];

$query2 = "SELECT SID FROM society where SNAME = '$sname'";
$data2 = mysqli_query($conn, $query2);
if($data2){
  $ress=mysqli_fetch_assoc($data2);
  $sid = $ress['SID'];
}

// $sid = $_GET['Sid'];
if($block!="" &&  $type!="" &&  $sid!="" )
{
$query = "INSERT INTO house(SID, TYPE, BLOCK_NO) VALUES('$sid' ,'$type', '$block')";
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
<a href="housedisplay.php">Show details</a>
<a href="../Admin/adminindex.php" >Back To Menu</a>
</html>