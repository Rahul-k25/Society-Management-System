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
 
 $query = "SELECT * FROM Society";
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
			<th>Society Name</th>
			<th>Society ID</th>
			<th>Address</th>
			<th>Number of houses</th>
			<th colspan="2">Operations</th>
		</tr>

<?php		
	 while($result = mysqli_fetch_assoc($data))
	 {
		 echo "<tr>
					<td>".$result['SNAME']."</td>
					<td>".$result['SID']."</td>
					<td>".$result['ADDRESS']."</td>
					<td>".$result['NO_OF_HOUSE']."</td>
					<td><a href='societyupdate.php?sname=$result[SNAME]&sid=$result[SID]&add=$result[ADDRESS]&houses=$result[NO_OF_HOUSE]'>Edit</a></td>
					<td><a href='societydelete.php?sid=$result[SID]' onClick='return checkdelete()'>Delete</a></td>
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
 <a href="../Admin/adminindex.php">Back To Menu</a>