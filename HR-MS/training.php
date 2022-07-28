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
 $training_name= $_POST['training_name'];
 $training_id= $_POST['training_id'];
 $employee_id= $_POST['employee_id'];



$sql = "INSERT INTO training (training_name,training_id,employee_id) VALUES ('$training_name','$training_id','$employee_id')";
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
<body><center> 
     <form  action="training.php" method="POST" >  
    <div>                
    </div>   
<a href= 'homepage2.php' class="button" >HOME</a>
    <h2 align="center"><font color="red" size="20" face="segeo print">training details</font> </h2>
    <table border=6>  
     <tr> 
        <td align="left"><font color="red" size="5" face="segeo print">training name</font></td></tr>  
         <tr><td>
            <input type="varchar" placeholder="Enter trainingname" name="training_name" required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td> </tr>
  <tr> <td align="left"><font color="red" size="5" face="segeo print">training id</font> </td></tr> 
         <tr> <td>    
            <input type="varchar" placeholder="Enter training_id" name="training_id" maxlength="10"  required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td></tr>
        
                 

     
    <tr> 
 

        
    <td align="left"><font color="red" size="5" face="segeo print">employee id </font> </td> </tr>
  <tr><td>    
    <input type="varchar" placeholder="Enter employee" name="employee_id" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td></tr>

 
    
    <tr>  
       <td>
<button type="submit" class="button" name="submit"  class="css3button" style="margin-left: 75px">SUBMIT</button>    
        </td>  
        </tr>
        
    </form>
</center>  
    </body>
</html>
