<?php
session_start();
$conn=mysqli_connect('127.0.0.1','root','');
if($conn){
	echo ' ';
}
else{
	echo ' ';
}
if(!mysqli_select_db($conn,'hh'))
{
	echo ' ';
}
if(isset($_POST['login']))
{
	$emailid=$_POST['email'];
	$password=$_POST['password'];
	
	
	
	$sql="SELECT * FROM hh.hrr  WHERE emailid='$emailid' and password='$password'";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_num_rows($query);
	 
	if($row==1)
	{
		echo "login successful";
		$_SESSION['emailid']=$emailid;
		
		header('location:homepage2.php');
	}
	else
	{
		echo "login failed";
		?><script>alert('invalid password or username');</script><?php
		
	}
    }

 ?>
	 
	 
	 	 
<!doctype html>
<html>
<head>
<title>login page</title>
<style>
.button {
    background-color:#99ffff;
    border: none;
    color:golden;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10%
}

</style>

</head>
<body background="sa.jpg"> 

    	<form action=hrlogin.php method="POST" >  
    <div>                
    </div>   
	<a href= 'homepage1.php' class="button" >HOME</a>
    <h2 align="center"><font color="jade" size="20" face="segeo print">HR-REGISTER</font> </h2>
    <table id="table1"; cellspacing="30px" cellpadding="8%"; align="center">  
     <tr>  
<tr> 
    <td align="right"><font color="#343434" size="5" face="segeo print">EMAIL ID</font></td>  
         <td>
    <input type="email" placeholder="Enter Email Id" name="email" required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td>  
 </tr>  
<tr>  
  <td align="right"><font color="#343434" size="5" face="segeo print">PASSWORD </font></td> 
  <td>    
    <input type="password" placeholder="Enter Password" name="password" required  style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td>
     
       </tr>  
	   <tr>
        
       <td>
<button class="button"   name="login" value="login"  class="css3button" style="margin-left: 75px">LOGIN</button>	   
        </td> 
    
      
        
     	<td>
     	
       <a href='sr.php' class="button">signup</a>
    
</td>
    </table>  
    </form> 
     
    </body>
</html>































