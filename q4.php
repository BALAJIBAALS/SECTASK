<html>

<head>
<style>


</style>
</head>
<body>
<?php
    include('session.php');
	$answer3 = $_POST['question-3-answers'];
	if(empty($answer3))
{
  
  header("Location:q3.php");
  return;
  
 }

         
			$servername="localhost";
                 $username="root";
                  $password="";
                  $dbname="bala";
                  mysql_connect($servername, $username, $password);
 
                  mysql_select_db($dbname);
				  $sql="select ans from quiz where sno=3";
				  $result=mysql_query($sql);
				  if($row=mysql_fetch_array($result))
				  { $answer=$row["ans"] ;
					  {if ($answer3 == $answer)
						  {
							  print " YOU  got the right ans";
							 print "THANKS FOR PLAYING";
							  sleep(3);
							  header("Location: qlogout.php");

							  
							  
						  }
						  else
						  {
							 
		header("Location: qlost.php");
		      
				  }}}
	?>
	
</body>
</html>			