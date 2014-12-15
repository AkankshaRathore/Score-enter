<?php
 require 'connect.php';
 
$Score = $_POST['scr'];
$team =$_POST['teamname'];
$event = $_POST['eventname'];
 
 $sql_query = "UPDATE score SET marks=".$Score." WHERE tid=".$team." AND eventid=".$event;

 $result =  mysqli_query($con,$sql_query);
 if($result)
 {
 //echo "Team Score enter successfully!!";
 header("location: ScoreEnterUI.php");
 }
 
 


 /*
 require 'connect.php';
echo "1111";

										//if(isset($POST_['submit'])){
											echo  $_POST['eventname'];
											echo $_POST['teamname'];

										//}
		*/								 ?>			

