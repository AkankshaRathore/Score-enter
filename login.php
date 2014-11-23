
<?php 
require "connect.php";
ob_start();
session_start();
?>
<?php
	if(isset($_POST['username']) and isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(!empty($username) and !empty($password))
		{			
			$result = mysqli_query($con,"Select * from user where u_name ='".$username."' and pwd = '".$password."'") or die(mysqli_error($con));
			$row = mysqli_fetch_array($result);
			if($row['u_name']==$username and $row['pwd']==$password)
			{
				$_SESSION['username'] = $username;
				header("location: ScoreEnterUI.php");
			}
			else
			{
				echo " <center> <h3> Invalid Username/Password Combination </h3> </center>";
				header("location: login.html");
			}
			mysqli_close($con);
		}
		
	}
	
?>
