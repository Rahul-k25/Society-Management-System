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
 
 $query = "Select * from house";
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
			<th>House ID</th>
			<th>Block Number</th>
			<th>Type</th>
			<th>Society Id</th>
			<th colspan="2">Operations</th>
		</tr>

<?php		
	 while($result = mysqli_fetch_assoc($data))
	 {
		 echo "<tr>
					<td>".$result['HID']."</td>
					<td>".$result['BLOCK_NO']."</td>
					<td>".$result['TYPE']."</td>
					<td>".$result['SID']."</td>
					<td><a href='houseupdate.php?hid=$result[HID]&bno=$result[BLOCK_NO]&type=$result[TYPE]&id=$result[SID]'>Edit</a></td>
					<td><a href='housedelete.php?hid=$result[HID]' onClick='return checkdelete()'>Delete</a></td>
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
 <a href="House.php" >Back</a>
 