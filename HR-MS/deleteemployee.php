<!DOCTYPE html>
<head>

</head>

<body>
<div class="body">


<form action="" method="POST">
<table align="center" style="padding-top:20px" cellpadding="10px" cellspacing="5px" >
<tr>
		<th colspan="4" align="center" > 
			<h2><u>Remove Employee<u></h2>
		</th>
	</tr>
	<tr>
		<td  align="center">
			<label>Enter EMPLOYEE_ID:</label>
		</td>
		<td >
			<input type="text" name="employee_id" placeholder=" " required >
		</td>
		<td >
		<button value="search" name="search"> delete</button>
		</td>

 	</tr>	
	</table>
<?php
$conn = mysqli_connect("localhost", "root", "", "hh");

	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	
	if(isset($_POST['search']))
	{
		$employee_id=$_POST['employee_id'];
		
		$sql = "delete from employee where employee_id=$employee_id";
		$result = $conn-> query($sql);
     		echo "Record updated";
	
	}
	?>
	</form>
</div>
<center>
 <a href= 'viewemployee.php' class=button onclick="goBack()">Go Back</button></a>

</center>
</body>
</html>