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
 
 $query = "CALL get_users()";
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
			<th>SOCIETY Name</th>
		</tr>

<?php		
	 while($result = mysqli_fetch_assoc($data))
	 {
		 echo "<tr>
					<td>".$result['UID']."</td>
					<td>".$result['NAME']."</td>
					<td>".$result['SOCIETY_NAME']."</td>
				</tr>";
	 }
 }
 
 else{
	 echo "No Record found";
 }
 ?>
 </table>
 
 