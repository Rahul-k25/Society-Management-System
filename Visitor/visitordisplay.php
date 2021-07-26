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
 $query1 = "SELECT HOUSE_NO FROM user where UID = $uid";
 $data1 = mysqli_query($conn, $query1);
 if(mysqli_num_rows($data1)>0)
 {
     while($ress=mysqli_fetch_assoc($data1)){
         $val=$ress['HOUSE_NO'];
 }
 }

 $query = "Select VID, VISITOR_NAME, MOBILE, ADDRESS, REASONTOMEET, ENTRY_DATE from visitor where HOUSE_NO = $val";
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
			<th>Visitor ID</th>
			<th>Visitor Name</th>
			<th>Mobile</th>
			<th>Address</th>
            <th>Reason to Meet</th>
            <th>Visit Date</th>
		</tr>

<?php		
	 while($result = mysqli_fetch_assoc($data))
	 {
		 echo "<tr>
					<td>".$result['VID']."</td>
					<td>".$result['VISITOR_NAME']."</td>
					<td>".$result['MOBILE']."</td>
                    <td>".$result['ADDRESS']."</td>
                    <td>".$result['REASONTOMEET']."</td>
                    <td>".$result['ENTRY_DATE']."</td>
				</tr>";
	 }
 }
 
 else{
	 echo "No Visitor found";
 }
 ?>
 </table>
  <br>
 <br>
 <br>
 <a href="../User/userindex.php" >Back</a>
 