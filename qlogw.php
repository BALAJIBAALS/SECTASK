<html>
<body>
<?php
                 
				  $logemail=$_POST["emaill"];
				  $logpass=$_POST["plog"];
				  $servername="localhost";
                 $username="root";
                  $password="";
                  $dbname="bala";
                  mysql_connect($servername, $username, $password);
 
                  mysql_select_db($dbname);
				  session_start();
   
                 $sql = "SELECT sno from register where email='$logemail'and  pass='$logpass'";
                 $result=mysql_query($sql);
				 
	
      $row = mysql_fetch_array($result);
      
      
      $count = mysql_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $logemail;
         
         header("location: q1.php");
      }else {
         echo "Your Login Name or Password is invalid";
		 header("location:logi.php");
      }
   
?>
</body>
</html>
				 
				 
		         
						 
				 		  
						  