<?php
 require 'connect.php';
 
 $Score = $_POST['scr'];
 $team =$_POST['teamname'];
 $event = $_POST['eventname'];
 
 $sql_query = "UPDATE score SET marks=".$Score." WHERE tid=".$team." AND eventid=".$event;
 echo $sql_query;
 $result =  mysqli_query($con,$sql_query);
 if($result)
 {
 echo "Team Score enter successfully!!";
 }
 
 
?>
