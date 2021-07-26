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

<html style="background-color:Gray;background: url(../Image/security1.jpg) left top repeat;
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

<form method="GET" action="">
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
  <!-- <input type="text" name="Sname" > -->
  <br>
  Payment<br>
  <input type="text" name="Payment" >
  <br>
  Security Name<br>
  <input type="text" name="SecName" >
  <br>
  Date Of Joining<br>
  <input type="text" name="Date_of_Joining" >
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Add Security">
</form> 

<?php
//Step2
if($_GET['submit'])
{
$sname = $_GET['Society_Name'];
$pay = $_GET['Payment'];
$name = $_GET['SecName'];
$joining = $_GET['Date_of_Joining'];

$query2 = "SELECT SID FROM society where SNAME = '$sname'";
$data2 = mysqli_query($conn, $query2);
if($data2){
  $ress=mysqli_fetch_assoc($data2);
  $s_id = $ress['SID'];
}

if($s_id!="" &&  $pay!="" &&  $name!="" && $joining!="")
{
$query = "INSERT INTO Security(S_ID, SECNAME, PAYMENT, DATE_OF_JOINING) VALUES('$s_id', '$name','$pay','$joining')";
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
echo "";
?>
<br><br><br><br>
<a href="securitydisplay.php">Show details</a>
<a href="../Admin/adminindex.php" >Back To Menu</a>
</html>