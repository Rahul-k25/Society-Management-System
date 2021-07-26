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
 $_GET['hid'];
 $_GET['bno'];
 $_GET['type'];
 $_GET['name'];
?>

<html style="background-color:Gray; background: url(../Image/bg11.jpg) left top repeat;
    padding: 15px;">
 
 <style>
img {
    border-radius: 40%;
	
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
<img src="../Image/houselogo.png" alt="Front" width="20%" height="100">


<?php

$query1 = "SELECT SID FROM society";
$data1 = mysqli_query($conn, $query1);
if(mysqli_num_rows($data1)>0)
{
  
  ?>

<h2>HOUSE</h2>

<form method="GET" action="">
  House ID<br>
  <input type="text" name="Hid" value="<?php echo $_GET['hid']; ?>"/><br>
  <br>
  Block No<br>
  <input type="text" name="Block_no" value="<?php echo $_GET['bno']; ?>"/><br>
  <br>
  House Type<br>
  <select name="Type">
    <option value="1BHK">1BHK</option>
    <option value="2BHK">2BHK</option>
    <option value="3BHK">3BHK</option>
    <option value="4BHK">4BHK</option>
  </select>
  <!-- <input type="text" name="Type" value="<?php echo $_GET['type']; ?>"/><br> -->
  <br>
  Society ID<br>
  <select name="Sid">
    <option value="<?php echo $_GET['id']; ?>">
        <?php echo $_GET['id']; ?>
    </option>

      <?php
        while($ress=mysqli_fetch_assoc($data1)){
          $val=$ress['SID']
      ?>

    <option value="<?php echo htmlspecialchars($val); ?>">
    <?php echo htmlspecialchars($val); ?>
    </option>
    <?php 
        }
      }
    ?>
  </select>
  <!-- <input type="text" name="Society_Name" value="<?php echo $_GET['id']; ?>"/><br> -->
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Update">
</form> 

<?php
//Step2
if($_GET['submit'])
{
	$hid = $_GET['Hid'];
    $bno = $_GET['Block_no'];
    $type = $_GET['Type'];
    $id = $_GET['Sid'];
	$query = "UPDATE HOUSE SET BLOCK_NO='$bno' , TYPE='$type' , SID='$id' WHERE HID='$hid' ";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "<font color='green'>Record updated successfully; <a href='housedisplay.php'>Check updated records here</a>";
	}
	else{
		echo "<font color='white'>Record not updated.<a href='housedisplay.php'>Check updated records here</a>";
	}
}
else{
	echo "<font color='red'>Click on update button to save the changes";
}
?>
<br><br><br>
<a href="../Admin/adminindex.php" >Back To Menu</a>
</html>