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

<html style="background-color:Gray; background: url(../Image/bgnew.jpg) left top repeat;
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

textarea {
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
<img src="../Image/complaintlogo.png" alt="Front" width=20%" height="80">



<!-- 
<h2>COMPLAINTS</h2> -->
<br><br><br>
<h2>User Name : <?php echo $_GET['name']; ?></h2><br>
<form method="GET" action="">
  
  User ID<br>
  <input type="text" name="Uid" value= "<?php echo $_GET['uid']; ?>">
  <br>
  Subject<br>
  <input type="text" name="Subject" >
  <br>
  Complaint<br>
  <!-- <input type="text" name="Complaint" > -->
  <textarea name="Complaint" rows="5" cols="40"></textarea>
  <br>
  <input type="submit" class="button" name="submit" value="Submit Complaint">
  <br>
</form> 

<?php
//Step2
if($_GET['submit'])
{

$uid = $_GET['Uid'];
$sub = $_GET['Subject'];
$complaint = $_GET['Complaint'];

if($uid!="" && $sub!="" && $complaint!="")
{
$query = "INSERT INTO complaints(UID, SUBJECT, COMPLAINT) VALUES('$uid', '$sub', '$complaint')";
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
<a href="complaintsdisplay.php?uid=<?php echo $_GET['uid']; ?>">Show details</a>
<a href="../User/userindex.php" >Back To Menu</a>
</html>