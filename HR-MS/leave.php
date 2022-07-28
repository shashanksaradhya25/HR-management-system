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
if(isset($_POST['submit']))
{
 $employee_id= $_POST['employee_id'];
 $leave_id= $_POST['leave_id'];
 $start_date= $_POST['start_date'];
 $end_date=$_POST['end_date'];



$sql = "INSERT INTO leavee (employee_id,leave_id,start_date,end_date) VALUES ('$employee_id','$leave_id','$start_date','$end_date')";
if(!mysqli_query($conn,$sql))
{
    echo '  ';
}
else
{
    ?><script>alert('registration succesfull');</script><?php
}

}
?>
<!doctype html>
<html>
<head>
<title>register page</title>

</head>
<body>
<center> 
     <form  action="leave.php" method="POST" >  
  
<a href= 'homepage2.php' class="button" >HOME</a>
    <h2 align="center"><font color="red" size="20" face="segeo print">leave details</font> </h2>
    <table border=3>  
     <tr> 
        <td align="left"><font color="red" size="5" face="segeo print">employee id</font></td></tr>  
        <tr> <td>
            <input type="varchar" placeholder="Enter employee id" name="employee_id" required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td> </tr>
  
<tr> <td align="left"><font color="red" size="5" face="segeo print">leave id</font> </td> </tr>
         <tr> <td>    
            <input type="varchar" placeholder="Enter leave id" name="leave_id" maxlength="10"  required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td></tr>
        
                 
     
    <tr> 
 

        
    <td align="left"><font color="red" size="5" face="segeo print"> leave start_date </font> </td> </tr>
  <tr><td>    
    <input type="date" placeholder="Enter start date" name="start_date" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td></tr>
 <tr><td align="left"><font color="red" size="5" face="segeo print"> leave end_date </font> </td> </tr>
 <tr> <td>  
    <input type="date" placeholder="Enter end date" name="end_date" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td></tr>
<tr>
  
        </tr>
 
    
    <tr>  
       <td>
<button type="submit" class="button" name="submit"  class="css3button" style="margin-left: 75px">SUBMIT</button>    
        </td>  
        </tr>
        
    </form>
</center>  
    </body>
</html>
