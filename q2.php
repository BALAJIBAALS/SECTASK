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
	
        	<center><h1>LEVEL 2</h1></center>
		<ul>
		<li><a href="qhome.php">HOME</a></li>
		<li><a href="rules.html">RULES</a></li>
  
  <li><a href="qlogout.php">LOGOUT</a></li>
  
  
</ul>

<?php
$answer1 = $_POST['question-1-answers'];
if(empty($answer1))
{

  header("Location: q1.php");
  return; // if level 2 is directly accessed, it will redirect to level 1
		      
  
 }
            
			$servername="localhost";
                 $username="root";
                  $password="";
                  $dbname="bala";
                  mysql_connect($servername, $username, $password);
 
                  mysql_select_db($dbname);
				  $sql="select ans from quiz where sno=1";
				  $result=mysql_query($sql);
				  if($row=mysql_fetch_array($result))
				  { $answer=$row["ans"] ;
					  {if ($answer1 == $answer)
			{
			
			
			echo "<form action='q3.php' method='post' id='quiz1'>";
			
			
		   
	echo "<div style='padding:5px;margin-top:100px;background-color:#1abc9c;height:570px;float:center'> ";
		
            echo "<ol>";
            
                echo "<li>";
				  
                 $servername="localhost";
                 $username="root";
                  $password="";
                  $dbname="bala";
                  mysql_connect($servername, $username, $password);
 
                  mysql_select_db($dbname);
                 $sql = "SELECT ques,choice1,choice2,choice3,choice4 from quiz where sno=2";
                 $result=mysql_query($sql);
                 while($row=mysql_fetch_array($result)){
                
                    echo "<h3>" .$row["ques"]. "</h3>";
                    echo "<div>
                        <input type='radio' name='question-2-answers' id='question-2-answers-A' value='A' required/>
                        <label for='question-2-answers-A'>" .$row["choice1"].  "</label>
                    </div>";
                    
                    echo "<div>
                        <input type='radio' name='question-2-answers' id='question-2-answers-B' value='B' required />
                        <label for='question-2-answers-B'>".$row["choice2"]."</label>
                    </div>";
                    
                    echo "<div>
                        <input type='radio' name='question-2-answers' id='question-2-answers-C' value='C' required/>
                        <label for='question-2-answers-C'>".$row["choice3"]."</label>
                    </div>";
                    
                    echo "<div>
                        <input type='radio' name='question-2-answers' id='question-2-answers-D' value='D' required />
                        <label for='question-2-answers-D'>".$row["choice4"]."</label>
                    </div>";
				 }
                echo "</li>";
                
      echo "</ol>";    
 echo "<input type='submit' name='submit' value='Submit'>";  
 echo"</div>";
 echo "</form>";
                
				  }	    
			else
			{ 
		
		     header("Location: qlost.php");
				  }}}
?>
</body>
</html>