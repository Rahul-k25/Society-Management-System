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
 $_GET['secid'];
 $_GET['sid'];
 $_GET['pay'];
 $_GET['secname'];
 $_GET['joining'];
?>

<html style="background-color:Gray;
    padding: 15px;">
 
 <style>
img {
    border-radius: 20%;
	
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
<font color="white">
<img src="../Image/securitylogo.png" alt="Front" width="20%" height="100">

<?php

$query1 = "SELECT SNAME FROM society";
$data1 = mysqli_query($conn, $query1);
if(mysqli_num_rows($data1)>0)
{
  
  ?>


<h2>UPDATE</h2>

<form method="GET" action="">
  Security ID<br>
  <input type="text" name="Sec_id" value="<?php echo $_GET['secid']; ?>"/><br>
  <br>
  Society Name<br>
  <?php $abc = $_GET['sid']; ?>
  <select name="Society_Name">
    <option value="">  </option>

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
  <!-- <input type="text" name="S_id" value=""/><br> -->
  <br>
Payment<br>
  <input type="text" name="Payment" value="<?php echo $_GET['pay']; ?>"/><br>
  <br>
  Security Name<br>
  <input type="text" name="SecName" value="<?php echo $_GET['secname']; ?>"/><br>
  <br>
  Date of Joining<br>
  <input type="text" name="Date_of_Joining" value="<?php echo $_GET['joining']; ?>"/><br>
  <br>
  <input type="submit" class="button" name="submit" value="Update">
  <br><br>
</form> 

<?php
//Step2

if($_GET['submit'])
{ 
  $sid = $abc;

  if(!empty($_GET['Society_Name'])){
    $sname = $_GET['Society_Name'];
    $query2 = "SELECT SID FROM society where SNAME ='$sname'";
    $data2 = mysqli_query($conn, $query2);
    if(mysqli_num_rows($data2)>0){
      $ress1=mysqli_fetch_assoc($data2);
      $sid = $ress1['SID'];
    }
  }

	$secid = $_GET['Sec_id'];
  $pay = $_GET['Payment'];
  $secname = $_GET['SecName'];
	$joining = $_GET['Date_of_Joining'];
	$query = "UPDATE SECURITY SET S_ID='$sid' , PAYMENT='$pay' , SECNAME='$secname', DATE_OF_JOINING='$joining' WHERE SEC_ID='$secid' ";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "<font color='green'>Record updated successfully; <a href='securitydisplay.php'>Check updated records here</a>";
	}
	else{
		echo "<font color='white'>Record not updated.<a href='securitydisplay.php'>Check updated records here</a>";
	}
}
else{
	echo "<font color='red'>Click on update button to save the changes";
}
?>
<br><br><br><br>
<a href="../Admin/adminindex.php" >Back To Menu</a>
</html>