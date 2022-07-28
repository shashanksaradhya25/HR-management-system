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
 $employee_id = $_POST['employee_id'];
 $employee_name = $_POST['employee_name'];
 $address= $_POST['address'];
 $department_id= $_POST['department_id'];
 $email = $_POST['email'];
 $training_id = $_POST['training_id'];
 $hr_id = $_POST['hr_id'];
 $password = $_POST['password'];


$sql = "INSERT INTO employee (employee_id,employee_name,address,department_id,email,training_id,hr_id,password) VALUES ('$employee_id','$employee_name','$address','$department_id','$email','$training_id','$hr_id','$password')";
if(!mysqli_query($conn,$sql))
{
    echo '  ';
}
else
{
    ?><script>alert('registration auccesfull');</script><?php
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
     <form  action="employee.php" method="POST" >    
<a href= 'homepage2.php' class="button" >HOME</a>
    <h2 align="center"><font color="red" size="20" face="segeo print">REGISTER</font> </h2>
    <table border=6>  
     <tr> 
        <td align="right"><font color="black" size="5" face="segeo print">EMPLOYEE ID</font></td>  
         <td>
            <input type="varchar" placeholder="Enter employee id" name="employee_id" required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td> 
   <td align="right"><font color="black" size="5" face="segeo print">EMPLOYEE NAME</font> </td> 
          <td>    
            <input type="varchar" placeholder="Enter employee name" name="employee_name" maxlength="10"  required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td>
        
                 
     </tr> 
     
    <tr> 
        <tr>
<td align="right"><font color="black" size="5" face="segeo print">address</font> </td> 
  <td>    
    <input type="varchar" placeholder="Enter address" name="address" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td>

        
    <td align="right"><font color="black" size="5" face="segeo print">department_id</font> </td> 
  <td>    
    <input type="varchar" placeholder="Enter department id" name="department_id" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td>
<tr>
  <td align="right"><font color="black" size="5" face="segeo print">email</font> </td> 
     <td>    
     <input type="email" placeholder="Enter email" name="email" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td>
 <td align="right"><font color="black" size="5" face="segeo print">training_id</font> </td> 
     <td>    
     <input type="varchar" placeholder="Enter training id" name="training_id" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td>
 <tr>
 <td align="right"><font color="black" size="4" face="segeo print">hr_id</font> </td> 
     <td>    
     <input type="varchar" placeholder="Enter hr id" name="hr_id" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td></tr>
<tr><td align="right"><font color="black" size="4" face="segeo print">password</font> </td> 
     <td>    
     <input type="varchar" placeholder="Enter password" name="password" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td>



          
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
