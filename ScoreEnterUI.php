<!DOCTYPE html>
<?php
   require 'connect.php';
   session_start();
   
   
   if(isset($_SESSION['username']))
   {
   
?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">
<script type="text/javascript" src="MyFormValidation.js" ></script>
<script>
//Function for allowing only numbers in postal code and phone numbers... 
//Here 8 is for backspace key, 37 for left arrow key and 39 for right arrow key and 9 is for Tab.
//Here is a problem that ascii key conflicts occur at 37 and 39 % and ' also work.
function onlyNumbers(event)				
{
    	var e =event; 
   	var charCode = e.which || e.keyCode;

    		if ((charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 37 || charCode == 39 || charCode == 9) 
       			 return true;
			else
				 return false;

}
function onlyChars(event)
{
	var e =event;
	var charCode = e.which || e.keyCode;
	if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 9)
		return true;
	else 
		return false;
}
/*Function used to copy the current address to permanent address*/
function Copy(add)
{
	if(add.checkme.checked==true)
	{
		add.permanentaddress.value=add.currentaddress.value;
	}
}
function digitsonly(e)
{
	var data=document.getElementById('cnumber').value;
	if(data.Length!=10)
       {
       alert("Please enter 10 digits");
       return false;
       }
    else
    	return true;   
}
</script>
</head>
<body>
	<div>  <!-- This div for outermost panel where panel property is removed-->
		<div <h1 class="panel-primary-default" <br><center><img src="xpressions.jpg" width="900" height="100px"></center></h1></div>
			<div class="panel panel-primary">
				<body>
					<div class="container">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8" style="">
								<div class="col-md-2"></div>
								
								<!-- starting inside panel -->
															
										
																						
	                                   <a href ="logout.php">Logout </a>
					
									<br>
									 <form role="form" method="POST" id="theForm" action="InsertScore.php"> 

										<select name="teamname" class="form-control">
										<option>Select Team </option>
										<?php 
										// Taking team name and team Id from DB
										$sql_query = "Select tid,tname from team_master";
										$result =  mysqli_query($con,$sql_query);
										
										 while($row = mysqli_fetch_array($result)) 
										{ 
												$team_name = $row['tname'];
												$tid = $row['tid'];
												echo "<option value=".$tid.">".$team_name."</option>";
								        }
										?>
									
											
										</select><br/><br/><br/>
										<select  name="eventname" class="form-control">
										<option>Select event </option>
										<?php 
										// Taking event name and event Id from DB for day 1 event
										$sql_query = "Select event_id,ename from event_master where day=1";
										$result =  mysqli_query($con,$sql_query);
										
										 while($row = mysqli_fetch_array($result)) 
										{ 
												$event_name = $row['ename'];
												$eid = $row['event_id'];
												echo "<option value=".$eid.">".$event_name."</option>";
								        }
										?>
											
										</select> <br/><br/><br/>
										
										<input type='text' name='scr' class='form-control' placeholder='Enter score'>
										<br/><br/><br/>
													
													
													
										<!--Useless		
										<table id="table1" style="border:1px solid grey" class="table">
										
											<script>
											function enterscore(x)
											{
												var teamno=x;   /* the teamno fetched from team selection dropdown */
											
											
												var events=5;  /* no of events */
												msg = '';
												for (i=1;i<=events;i++)
													msg += "<tr><td>" + i + "</td><td>
													<input type='text' name='e" + teamno + i + "' class='form-control' placeholder='Enter Event Name'><td><input type='text' name='s" + teamno + i + "' class='form-control' style='width:80px' placeholder='Score'></td></tr>";
					
														
												document.getElementById('table1').innerHTML=msg;
												$('#submit').css('visibility','visible');
											}
														
											</script>													
										</table>
										
										-->		
		
			
			
												
										<center>
											<input required="required" class="btn btn-success" type="submit" value="Submit" id="submit">
												
										</form>

										
									
                                    <!-- ending inside panel -->
								
							</div>			
						</div>
					</div><!---container's div-->
				</body>
			</div>
	</div>	

	
</body>


</html>
<?php
}
else
{
header("location: login.html"); // Redirecting To Other Page
} 
?>

