<?php 
    //name:zabbir hossain mbl:01933722564 email:zabbirhossain729@gmail.com
    $host="localhost";  ///connected server index,delete,login,view,logout,read,update
 	$user="root";
    $pass="";
    $db_name="student_projectt";   /// Database name view


   $con=new mysqli($host,$user,$pass,$db_name);
   if ($con->connect_error) {
   	die("ERROR: ".$con->connect_error);
   }

 ?>