<!DOCTYPE html>

<div class="name">
<?php
session_start();
echo "Welcome ".$_SESSION['name']; 
?>
</div>
<html lang="en">
<html style="background-color:Gray; background: url(../Image/user-bac.jpg) left top repeat;
    padding: 15px;">
<title></title>

<style>

.name{
	margin: auto;
    width: 10%;
    border: 8px solid #73AD21;
    padding: 8px;
	  color:white;
    font-size:200%;
    text-align:center;
}	
	
	
.D
{
	color:white;
}


a {
    background-color:#FFD700;
  color: white;
  padding: 1em 1.5em;
  text-decoration: none;
  text-transform: uppercase;
  
}

a:hover {
  background-color: skyblue;
}

.dropbtn {
    background-color: #FF3366;
    color: white;
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
    color: white;
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
  <br>
  <br>
  <br>
 <div class="D" style="float: right;
  margin-left:10px;">
    <a href="userPortalAbout.php" >About</a>
    
    <a href="userPortalContact.php" >Contact</a>
	
	<a href="storeduser.php" >Other Residents</a>

  <a href="userlogin.php" >Log Out</a>
	</div>

<nav class="B" id="mySidebar">
  
  <div class="dropdown"> <button class="dropbtn">Menu</button>
  <div class="dropdown-content">

  <a  href="../Complaint/Complaints.php?uid=<?php echo $_SESSION['uid'] ?>&name=<?php echo $_SESSION['name'] ?>">Complaints Page</a>
  <a  href="../Visitor/visitordisplay.php?uid=<?php echo $_SESSION['uid'] ?>&name=<?php echo $_SESSION['name'] ?>">Visitors</a><br><br>

</div>
  </div>
</nav>



</body>
</html>
</html>