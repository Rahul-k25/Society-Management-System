<!DOCTYPE html>

<div class="name">
<?php
session_start();
echo "Welcome ".$_SESSION['adminid'];
?>
</div>
<html lang="en">
<html style="background-color:Gray; background: url(../Image/bg12.jpg);
    padding: 15px; width:100%;">
<title></title>

<style>

.name{
	margin: auto;
    width: 10%;
    border: 8px solid #73AD21;
    padding: 8px;
	color:black;
    font-size:200%;
    text-align:center;
}	
	
	
.D
{
	color:black;
}


a {
  background-color:#FFD700;
  color: black;
  padding: 1em 1.5em;
  text-decoration: none;
  text-transform: uppercase;
  
}

a:hover {
  background-color: skyblue;
}

.dropbtn {
    background-color: #FF3366;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	
	
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    
    min-width: 160px;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #FF9966}

.dropdown:hover .dropdown-content {
    display: block;
	float: left;
}

.dropdown:hover .dropbtn {
    background-color: #FF6633;
}
</style>

<body>



  
    
    <div class="D" style="float: right;
  margin-left:10px;">
    <a href="../about.php" >About</a>
    
    <a href="../contact.php" >Contact</a>
	<a href="../User/storeduser.php" >Residents</a>
	<a href="adminlogin.php" >Log Out</a>

	</div>
    
  



<nav class="B" id="mySidebar">
  
  
  <div class="dropdown"> <button class="dropbtn">Menu</button>
  
  <div class="dropdown-content">
  <a  href="../Society/Society.php">Society</a>
  <a  href="../Resident/Resident.php">User Details</a>
  <a  href="../Security/Security.php">Security Details</a>
  <a  href="../House/House.php">House</a>
  <a  href="../Rent/House Rent.php">Rent</a>
  <a  href="../Sell/sell.php">Sell</a>
  <a  href="../Admin/admincomplaints.php">Complaints Page</a>
  <a  href="../Admin/admindetails.php">Admin Details</a>
  </div>
  </div>
</nav>




</body>
</html>
</html>