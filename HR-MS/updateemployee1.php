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

$sql = "SELECT * FROM employee where employee_id=".$_POST['employee_id'];

//die();
$result=$conn->query($sql);

if($result->num_rows > 0)
{

  // output data of each row
$row = $result->fetch_assoc();
 $employee_id = $_POST['employee_id'];
 $employee_name = $_POST['employee_name'];
 $address= $_POST['address'];
 $department_id= $_POST['department_id'];
 $email = $_POST['email'];
 $training_id = $_POST['training_id'];
 $hr_id = $_POST['hr_id'];
 $password = $_POST['password'];

 
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
<form action='updateemployee2.php' method=POST>
<tr><td>employee_id</td><td><input type=text name=employee_id value=<?php echo $employee_id;?> readonly></input> </td>
<tr><td>employee_name</td><td><input type=text name=employee_id value=<?php echo $employee_name;?> ></input> </td>
<tr><td>address</td><td><input type=text name=address value=<?php echo $address;?> ></input> </td>
<tr><td>deaprtment_id</td><td><input type=text name=deaprtment_id value=<?php echo $deaprtment_id;?> ></input> </td>
<tr><td>email</td><td><input type=text name=email value=<?php echo $email;?> ></input> </td>
<tr><td>salary</td><td><input type=text name=salary value=<?php echo $salary;?> ></input> </td>
<tr><td>training_id</td><td><input type=text name=training_id value=<?php echo $training_id;?> ></input> </td>
<tr><td>hr_id</td><td><input type=text name=hr_id value=<?php echo $hr_id;?> ></input> </td>
<tr><td>password</td><td><input type=text name=password value=<?php echo $password;?> ></input> </td>


<tr><td><input type=reset></input></td><td><input type=submit></input></td>   </tr>
<a href= 'homepage2.php' class="button" >HOME</a>

</table>
</form>
</body>
</center>
</html>