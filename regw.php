<html>
<head>
<body>
<?php
if(empty($name=$_POST["name"]))
{
  echo ("name is required");
  return;
 }
 if(empty($pp=$_POST["ps"]))
{
	if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $pp)) { echo 'the password does not meet the requirements!'; }
  echo ("pass is required");
  return;
  
 }
  if(empty($date=$_POST["date"]))
{
  echo ("date is required");
  return;
  
 }
 if(empty($phn=$_POST["phn"]))
{
  echo ("mobile is required");
  return;
  
 }
 if(empty($email=$_POST["email"]))
{
  echo ("mailid is required");
  return;
  
 }
 
$servername="localhost";
$username="root";
$password="";
$dbname="bala";
 mysql_connect($servername, $username, $password);
 
 mysql_select_db($dbname);
 
 $sql="INSERT into register (name,pass,DOB,mobile,email)  values('$name','$pp','$date','$phn','$email')";
 $result=mysql_query($sql);
 if($result)
 {
  header("Location:regsuc.php");
							  
   
 }
 else
 {
   echo("input fails");
   
 }
 ?>
 
 </body>
 </html>