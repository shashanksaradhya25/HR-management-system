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
 $department_name= $_POST['department_name'];
 $department_id= $_POST['department_id'];
 $employee_id= $_POST['employee_id'];



$sql = "INSERT INTO department (department_name,department_id,employee_id) VALUES ('$department_name','$department_id','$employee_id')";
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
     <form  action="department.php" method="POST" >  
    
<a href= 'homepage2.php' class="button" >HOME</a>
    <h2 align="center"><font color="red" size="20" face="segeo print">department details</font> </h2>
    <table border=6>  
     <tr> 
        <td align="right"><font color="red" size="5" face="segeo print">department name</font></td>  
         <td>
            <input type="varchar" placeholder="Enter Firstname" name="department_name" required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td> 
   <td align="right"><font color="red" size="5" face="segeo print">department id</font> </td> 
          <td>    
            <input type="varchar" placeholder="Enter date" name="department_id" maxlength="10"  required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td>
        
                 
     </tr> 
     
    <tr> 
 

        
    <td align="right"><font color="red" size="5" face="segeo print">employee id </font> </td> 
  <td>    
    <input type="varchar" placeholder="Enter Password" name="employee_id" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td>
<tr>
  
          
    </tr> 
 
    
    <tr>  
       <td>
<button type="submit" class="button" name="submit"  class="css3button" style="margin-left: 75px">SUBMIT</button>    
        </td>  
        </tr>
        
    </form>  
    </body>
</html>
