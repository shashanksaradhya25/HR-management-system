<?php
$conn=mysqli_connect('127.0.0.1','root','');
if($conn)
{
    echo ' ';
}
else{
    echo' ';
}
if(mysqli_select_db($conn,'university'))
{
   echo ' ';
}
if(isset($_POST['submit']))
{
 $project_id = $_POST['project_id'];
 $project_name = $_POST['project_name'];
 $duration= $_POST['duration'];
 $skill= $_POST['skill'];
 $faculty_id=$_POST['faculty_id'];


$sql = "INSERT INTO project (project_id,project_name,duration,skill,faculty_id) VALUES ('$project_id','$project_name','$duration','$skill','$faculty_id')";
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
<body background="qqq.jpg"> 
     <form  action="project.php" method="POST" >  
    <div>                
    </div>   
<a href= 'homepage2.php' class="button" >HOME</a>
    <h2 align="center"><font color="red" size="20" face="segeo print">project details</font> </h2>
    <table id="table1"; cellspacing="30px" cellpadding="8%"; align="center">  
     <tr> 
        <td align="right"><font color="red" size="5" face="segeo print">project_id</font></td>  
         <td>
            <input type="text" placeholder="Enter Firstname" name="project_id" required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td> 
   <td align="right"><font color="red" size="5" face="segeo print">project_name</font> </td> 
          <td>    
            <input type="varchar" placeholder="Enter date" name="project_name" maxlength="10"  required style="HEIGHT:30PX;WIDTH:200PX;"/>
         </td>
        
                 
     </tr> 
     
    <tr> 
 

        
    <td align="right"><font color="red" size="5" face="segeo print">duration of project </font> </td> 
  <td>    
    <input type="varchar" placeholder="Enter Password" name="duration" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td>
<tr>
  <td align="right"><font color="red" size="5" face="segeo print">skill requaired for project</font> </td> 
     <td>    
     <input type="varchar" placeholder="Enter rollno" name="skill" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td>
 
 <tr>
 <td align="right"><font color="red" size="5" face="segeo print">faculty_id</font> </td> 
     <td>    
     <input type="varchar" placeholder="Enter address" name="faculty_id" required style="HEIGHT:30PX;WIDTH:200PX;"/>
 </td>
          
    </tr> 
 
    
    <tr>  
       <td>
<button type="submit" class="button" name="submit"  class="css3button" style="margin-left: 75px">SUBMIT</button>    
        </td>  
        </tr>
        
    </form>  
    </body>
</html>
