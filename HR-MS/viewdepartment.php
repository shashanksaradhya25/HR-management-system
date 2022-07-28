<!DOCTYPE html>
<html>
<head>
<title>view department</title>

</head>
<body>
<center>
<form action="viewdepartment.php" method="POST" runat="server">
<table border=3>
<tr>

<th>department id</th>
<th>department name</th>
<th>employee id</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hh");
$sql =" SELECT * FROM department";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["department_id"]. "</td><td>" . $row["department_name"] . "</td><td>". $row["employee_id"] ."</td><td>";

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
</center>
<center>

</center>
</body>
</html>



