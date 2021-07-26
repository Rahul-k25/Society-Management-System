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
 <html style="background-color:Gray; background: url(../Image/bgnew.jpg);
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

<form method="GET" action="" >
  Society Name<br>
  <input type="text" name="Sname" >
  <br>
  Address<br>
  <input type="text" name="Address" >
  <br>
  No. of Houses<br>
  <input type="text" name="No_of_houses" >
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Add Society">
  <br>
</form> 


<?php
//Step2
if($_GET['submit'])
{
$sname = $_GET['Sname'];
$add = $_GET['Address'];
$houses = $_GET['No_of_houses'];

if($sname!=""&&  $add!="" &&  $houses!="")
{
$query = "INSERT INTO society(SNAME, ADDRESS, NO_OF_HOUSE) VALUES('$sname','$add', '$houses' )";
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

<a href="societydisplay.php">Show details</a>
<a href="../Admin/adminindex.php" >Back To Menu</a>
</font>
</div>
</html>