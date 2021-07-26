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
 
 $query = "Select * from complaints";
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
					<td><a href='../Complaint/complaintsreply.php?cid=$result[CID]'>Reply</a></td>
				</tr>";
	 }
 }
 
 else{
	 echo "No Record found";
 }
 ?>
 </table>
<br><br><br>
<a href="../Admin/adminindex.php"> Back to index</a>
 