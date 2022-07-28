<!DOCTYPE html>
<html>
<head>
<title>college details page</title>
<style>
    

</style>
</head>
<body>
<center>
 <form  action="viewpartemployee.php" method="POST" runat="server">

<table border=6>
<tr>

<th>emplopyee_id</th>
<th>employee_name</th>
<th>address</th>
<th>department_id</th>
<th>email</th>
<th>salary</th>
<th>training_id</th>
<th>hr_id</th>
<th>password</th>






</tr>
<?php
$conn=mysqli_connect('127.0.0.1','root','');
if($conn)
{
    echo ' ';
}
else{
    echo' ';
}
if(mysqli_select_db($conn,'hh'))
{
   echo ' ';
}


$sql = "SELECT * FROM employee  where employee_id='".$_POST['employee_id']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["employee_id"]."</td><td>".$row["employee_name"]."</td><td>" . $row["address"].  "</td><td>".$row["department_id"]."</td><td>".$row["email"]."</td><td>".$row["salary"]."</td><td>".$row["training_id"]."</td><td>".$row["hr_id"]."</td><td>".$row["password"]."</td><td>";

}
echo "</table>";
} else { echo "0 results"; }


?>

<button class=button ><a href="homepage2.php">back</a></button> to home page
</form>

   
</center>
</body>
</html>