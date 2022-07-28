<!DOCTYPE html>
<html>
<head>
<title>view leaves</title>
</head>
<body><center>
<form action="view_leaves.php" method="POST" runat="server">
<table border=6>
<tr>
<th>employee_id</th>
<th>leave_id</th>
<th>start_date</th>
<th>end_date</th>
<th>status</th>


</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hh");
$sql =" SELECT * FROM leavee";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["employee_id"]. "</td><td>" . $row["leave_id"] . "</td><td>" . $row["start_date"] . "</td><td>" . $row["end_date"] . "</td><td>". $row["status"] . "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
     <tr>
<td colspan="2" align="center">
    
<script>
function goBack() {
  window.history.back();
}
</script>
 <a href= 'homepage2.php' class="button" >go back</a>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>



