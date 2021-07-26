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

<html style="background-color:Gray;
    padding: 15px;">
 
 <style>
img {
    border-radius: 90%;
	
}

input{
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: black;
    
}


textarea{
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
<img src="../Image/replylogo.jpg" alt="Front" width="20%" height="100">





<h2>REPLY</h2>

<form method="GET" action="">
  Complain ID<br>
  <input type="text" name="Ciid" value="<?php echo $_GET['cid'] ?>"><br><br>
  Enter Reply<br>
  <textarea name="Reply" rows="5" cols="40"></textarea>
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Submit">
  <br><br><br>
</form> 

<?php
//Step2
if($_GET['submit'])
{
  $cid = $_GET['Ciid'];
  $rep = $_GET['Reply'];

if($cid!="" && $rep!="")
{
$query = "UPDATE COMPLAINTS SET REPLY ='$rep' WHERE CID ='$cid' ";
$data = mysqli_query($conn, $query);

if($data)
{
  echo "<font color='green'>Successfully Replied; <a href='../Admin/admincomplaints.php'>Check updated records here</a>";
}

}
else
{
	echo "All fields are required";
}
}
?>
<br>
<br><br><br>
<a href="../Admin/adminindex.php" >Back To Menu</a>
</html>