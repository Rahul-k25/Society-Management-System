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
 
 $uid = $_GET['uid'];
 $query = "Select * from complaints where UID = '$uid'";
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
    color: black;
}

a {
    background-color:orange;
  color: black;
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
			<th>Complaint ID</th>
			<th>User ID</th>
			<th>Subject</th>
			<th>Complaint</th>
			<th>Reply</th>
			<th colspan="2">Operations</th>
		</tr>

<?php		
	 while($result = mysqli_fetch_assoc($data))
	 {
		 echo "<tr>
					<td>".$result['CID']."</td>
					<td>".$result['UID']."</td>
					<td>".$result['SUBJECT']."</td>
					<td>".$result['COMPLAINT']."</td>
					<td>".$result['REPLY']."</td>
					<td><a href='complaintsupdate.php?cid=$result[CID]&uid=$result[UID]&sub=$result[SUBJECT]&complaint=$result[COMPLAINT]'>Edit</a></td>
					<td><a href='complaintsdelete.php?cid=$result[CID]' onClick='return checkdelete()'>Delete</a></td>
				</tr>";
	 }
 }
 
 else{
	 echo "No Complaint found";
 }
 ?>
 </table>
 <script>
 function checkdelete()
 {
	return confirm('Are you sure you want to delete this data?');
 }
 </script>
 
 <br><br><br>
 <a href="Complaints.php"> back </a>