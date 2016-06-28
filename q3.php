<html>

<head>
<style>
ul {
    
    overflow: hidden;
    background-color: #333;
	
   float: right;
    top: 2;
    width: 100%;
}



li a  {
    display: block;
    color: white;
    text-align: right;
    padding: 14px 16px;
    text-decoration: none;
	float:center;
}


</style>
<body>
<?php
            
   include('session.php');
   ?>
   			 <body
	
        	<center><h1>LEVEL 3</h1></center>
		<ul>
		<li><a href="qhome.php">HOME</a></li>
		<li><a href="rules.html">RULES</a></li>
  
  <li><a href="qlogout.php">LOGOUT</a></li>
  
</ul>
<?php
$answer2= $_POST['question-2-answers'];
if(empty($answer2))
{
  
  header("Location:q2.php");
  return;
  
 }
            
			$servername="localhost";
                 $username="root";
                  $password="";
                  $dbname="bala";
                  mysql_connect($servername, $username, $password);
 
                  mysql_select_db($dbname);
				  $sql="select ans from quiz where sno=2";
				  $result=mysql_query($sql);
				  if($row=mysql_fetch_array($result))
				  { $answer=$row["ans"] ;
					  {if ($answer2== $answer)
			{
		
			echo "<form action='q4.php' method='post' id='quiz1'>";
			
			
		   
	echo "<div style='padding:5px;margin-top:100px;background-color:#1abc9c;height:570px;float:center'> ";
		
            echo "<ol>";
            
                echo "<li>";
				  
                 $servername="localhost";
                 $username="root";
                  $password="";
                  $dbname="bala";
                  mysql_connect($servername, $username, $password);
 
                  mysql_select_db($dbname);
                 $sql = "SELECT ques,choice1,choice2,choice3,choice4 from quiz where sno=3";
                 $result=mysql_query($sql);
                 while($row=mysql_fetch_array($result)){
                
                    echo "<h3>" .$row["ques"]. "</h3>";
                    echo "<div>
                        <input type='radio' name='question-3-answers' id='question-3-answers-A' value='A' required/>
                        <label for='question-3-answers-A'>" .$row["choice1"].  "</label>
                    </div>";
                    
                    echo "<div>
                        <input type='radio' name='question-3-answers' id='question-3-answers-B' value='B' required />
                        <label for='question-3-answers-B'>".$row["choice2"]."</label>
                    </div>";
                    
                    echo "<div>
                        <input type='radio' name='question-3-answers' id='question-3-answers-C' value='C' required/>
                        <label for='question-3-answers-C'>".$row["choice3"]."</label>
                    </div>";
                    
                    echo "<div>
                        <input type='radio' name='question-3-answers' id='question-3-answers-D' value='D' required />
                        <label for='question-3-answers-D'>".$row["choice4"]."</label>
                    </div>";
				 }
                echo "</li>";
                
      echo "</ol>";    
 echo "<input type='submit' name='submit' value='Submit'>";  
 echo "</div>";
 echo "</form>";
                
				  }	    
			else
			{ 
		header("Location: qlost.php");
		      
		     
				  }}}
?>
</body>
</html>