<?php
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
 
 $query = "Select * from user";
 $data= mysqli_query($conn, $query);
 $total= mysqli_num_rows($data);
 
 if($total!=0)
 {
	 ?>
	 	 	 	 <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #9400D3;
    color: white;
}

a {
    background-color:orange;
  color: white;
  padding: 0.5em 1.5em;
  text-decoration: none;
  text-transform: uppercase;
}

a:hover {
  background-color: skyblue;
}
</style>
	 <table>
		<tr>
			<th>User ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile Number</th>
			<th>House Number</th>
			<th>Society Name</th>
			<th>Login ID</th>
			<th>Password</th
			<th colspan="2">Operations</th>
		</tr>

<?php		
	 while($result = mysqli_fetch_assoc($data))
	 {
		 echo "<tr>
					<td>".$result['UID']."</td>
					<td>".$result['NAME']."</td>
					<td>".$result['EMAIL']."</td>
					<td>".$result['MOBILE_NO']."</td>
					<td>".$result['HOUSE_NO']."</td>
					<td>".$result['SOCIETY_NAME']."</td>
					<td>".$result['LOGIN_NAME']."</td>
					<td>".$result['PASSWORD']."</td>
					<td><a href='residentupdate.php?uid=$result[UID]&name=$result[NAME]&email=$result[EMAIL]&mob=$result[MOBILE_NO]&hno=$result[HOUSE_NO]&sname=$result[SOCIETY_NAME]&lname=$result[Login_Name]&pass=$result[Password]'>Edit</a></td>
					<td><a href='residentdelete.php?uid=$result[UID]' onClick='return checkdelete()'>Delete</a></td>
				</tr>";
	 }
 }
 
 else{
	 echo "No Record found";
 }
 ?>
 </table>
 <script>
 function checkdelete()
 {
	return confirm('Are you sure you want to delete this data?');
 }
 </script>
 <br>
 <br>
 <br>
 <a href="Resident.php" >Back</a>
 