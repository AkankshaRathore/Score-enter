<?php 
require "connect.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql = "SELECT * from user WHERE pwd= '".$password ."' AND u_name='".$username."'";
echo $sql;
$result = $con->query($sql);


    // output data of each row
    echo "yy";
    while($row = $result->fetch_assoc()) {
        echo  "<th>".$row['u_name']."</th>";
    }
	echo '<th>Total</th>';
 

?>
<?php
/*session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) 
{
	echo "run";
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
echo "run";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($con,"SELECT * from user WHERE pwd=$password AND u_name=$username");
//$rows = mysqli_num_rows($query);
if ($row = mysqli_fetch_array($query)) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: index.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($con); // Closing Connection
}
}*/
?>