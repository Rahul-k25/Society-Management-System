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
 
 $query = "Select * from admin";
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
			<th>Admin ID</th>
			<th>Password</th>
			<th>Admin Name</th>
			<th>Email</th>
			<th>Mobile Number</th>
			<th colspan="1">Operations</th>
		</tr>

<?php		
	 while($result = mysqli_fetch_assoc($data))
	 {
		 echo "<tr>
					<td>".$result['ADMIN_ID']."</td>
					<td>".$result['PASSWORD']."</td>
					<td>".$result['ADMIN_NAME']."</td>
					<td>".$result['EMAIL']."</td>
					<td>".$result['MOBILE']."</td>
					<td><a href='adminupdate.php?aid=$result[ADMIN_ID]&pass=$result[PASSWORD]&name=$result[ADMIN_NAME]&email=$result[EMAIL]&mob=$result[MOBILE]'>Edit</a></td>
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
 <a href="adminindex.php" >Back</a>
 