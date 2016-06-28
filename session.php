<?php
                 $servername="localhost";
                 $username="root";
                  $password="";
                  $dbname="bala";
                  mysql_connect($servername, $username, $password);
 
                  mysql_select_db($dbname);
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysql_query("select email from register where email = '$user_check' ");
   
   $row = mysql_fetch_array($ses_sql);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:logi.php");
	  return;
   }
?>