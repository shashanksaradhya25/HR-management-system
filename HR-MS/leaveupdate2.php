<?php
$servername='localhost';
$username='root';
$password='';
$dbname='hh';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die('Could not Connect MySql:' .mysql_error());
}
else
{
	echo "connected to db";
		
$employee_id=$_POST['employee_id'];
$leave_id=$_POST['leave_id'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$status=$_POST['status'];
echo  $_POST['status'];

	$sql="UPDATE `leavee` SET `status`='$status' WHERE leave_id='$leave_id'";



       	
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('leave updated!!');
				window.location.href='homepage2.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Transaction Failed!!!! Try again');
				window.location.href='leaveupdate2.php';
				</script>";			
		}
	

}
?>