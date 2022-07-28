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
 $hr_id = $_POST['hr_id'];
 $hr_name = $_POST['hr_name'];
 $password= $_POST['password'];
 $emailid=$_POST['emailid'];




$sql = "INSERT INTO hrr (hr_id,hr_name,password,emailid) VALUES ('$hr_id','$hr_name','$password','$emailid')";
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
     <form  action="sr.php" method="POST" >  
    <div>                
    </div>   
<a href= 'homepage1.php' class="button" >HOME</a>
    <h2 align="center"><font color="Onyx" size="20" face="segeo print">project details</font> </h2>
    <table border=2>  
     <tr> 
        <td align="left"><font color="Onyx" size="5" face="segeo print">hr_id</font></td></tr> 
         <tr><td>
            <input type="varchar" placeholder="Enter HRid" name="hr_id" required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td></tr> 
   <tr><td align="left"><font color="Onyx" size="5" face="segeo print">hr_name</font> </td></tr> 
          <tr><td>    
            <input type="varchar" placeholder="Enter HR name" name="hr_name" maxlength="50"  required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td></tr>
         <tr><td align="left"><font color="Onyx" size="5" face="segeo print">email</font> </td></tr>
          <tr><td>    
            <input type="email" placeholder="Enter email" name="emailid" maxlength="50"  required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td></tr>
                 
   
     
    <tr> 
 

        
    <tr><td align="left"><font color="Onyx" size="5" face="segeo print">password </font> </td></tr> 
  <tr><td>   
    <input type="varchar" placeholder="Enter Password" name="password" required style="HEIGHT:30PX;WIDTH:200PX;"/>
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