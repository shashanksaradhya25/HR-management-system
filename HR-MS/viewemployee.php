<!DOCTYPE html>
<html>
<head>
<title>view employee</title>

</head>
<body>
<center>
<form action="viewemployee.php" method="POST" runat="server">
<table border=3>
<tr>
<th>employee_id</th>
<th>employee_name</th>
<th>address</th>
<th>department_id</th>
<th>email</th>
<th>training_id</th>
<th>hr_id</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hh");
$sql =" SELECT * FROM employee";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["employee_id"]. "</td><td>" . $row["employee_name"] . "</td><td>". $row["address"] ."</td><td>". $row["department_id"] . "</td><td>" . $row["email"] . "</td><td>". $row["training_id"] . "</td><td>".$row["hr_id"]."</td><td>";

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
 <a href= 'deleteemployee.php' class="button" >delete</a>

</center>
</body>
</html>



