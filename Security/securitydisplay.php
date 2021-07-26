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
 
 $query = "Select * from security";
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
			<th>Security ID</th>
			<th>Society ID</th>
			<th>Payment</th>
			<th>Security Name</th>
			<th>Date of Joining</th>
			<th colspan="2">Operations</th>
		</tr>

<?php		
	 while($result = mysqli_fetch_assoc($data))
	 {
		 echo "<tr>
					<td>".$result['SEC_ID']."</td>
					<td>".$result['S_ID']."</td>
					<td>".$result['PAYMENT']."</td>
					<td>".$result['SECNAME']."</td>
					<td>".$result['DATE_OF_JOINING']."</td>
					<td><a href='securityupdate.php?secid=$result[SEC_ID]&sid=$result[S_ID]&pay=$result[PAYMENT]&secname=$result[SECNAME]&joining=$result[DATE_OF_JOINING]'>Edit</a></td>
					<td><a href='securitydelete.php?secid=$result[SEC_ID]' onClick='return checkdelete()'>Delete</a></td>
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
 <a href="Security.php" >Back</a>