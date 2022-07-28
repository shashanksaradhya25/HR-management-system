<?php
$servername='localhost';
$username='root';
$password='';
$dbname='hh';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{

$sql = "SELECT * FROM leavee where leave_id=".$_POST['leave_id'];

//die();
$result=$conn->query($sql);

if($result->num_rows > 0)
{

  // output data of each row
$row = $result->fetch_assoc();
$employee_id=$row['employee_id'];
$leave_id=$row['leave_id'];
$start_date=$row['start_date'];
$end_date=$row['end_date'];
$status=$row['status'];


 
} else {
  echo "0 results";
  die();
}





}



?>
<html>
<head>
<title>
floor details
</title>
</head>
<center>
<body>
Leave details<HR SIZE="3"  COLOR="ORANGE">
<table border=1>
<form action='leaveupdate2.php' method=POST>
<tr><td>employee_id</td><td><input type=text name=employee_id value=<?php echo $employee_id;?> ></input> </td>
<tr><td>leave_id</td><td><input type=number name=leave_id value=<?php echo $leave_id;?> readonly></input> </td>
<tr><td>start_date</td><td><input type=date name=start_date value=<?php echo $start_date;?> ></input> </td>
<tr><td>end_date</td><td><input type=date name=end_date value=<?php echo $end_date;?> ></input> </td>
<tr><td>status</td><td><input type=text name=status value=<?php echo $status;?> ></input> </td>

<tr><td><input type=reset></input></td><td><input type=submit></input></td>   </tr>
<a href= 'homepage2.php' class="button" >HOME</a>

</table>
</form>
</body>
</center>
</html>