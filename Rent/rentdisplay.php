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
 
 $query = "Select * from rent";
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
			<th>Rent ID</th>
			<th>User ID</th>
			<th>House ID</th>
			<th>Security Name</th>
			<th>Rent Price</th>
			<th colspan="2">Operations</th>
		</tr>

<?php		
	 while($result = mysqli_fetch_assoc($data))
	 {
		 echo "<tr>
					<td>".$result['RID']."</td>
					<td>".$result['UID']."</td>
					<td>".$result['HID']."</td>
					<td>".$result['SOCIETY_NAME']."</td>
					<td>".$result['RENT_PRICE']."</td>
					<td><a href='rentupdate.php?rid=$result[RID]&uid=$result[UID]&hid=$result[HID]&name=$result[SOCIETY_NAME]&price=$result[RENT_PRICE]'>Edit</a></td>
					<td><a href='rentdelete.php?rid=$result[RID]' onClick='return checkdelete()'>Delete</a></td>
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
 
 <br><br><br><br>
 <a href="House Rent.php"> Back </a>