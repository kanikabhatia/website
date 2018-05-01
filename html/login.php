<?php
$username = $_POST['uname']; 
$password = $_POST['pass']; 
$password=str_replace("'","\'",$password);
$conn=mysqli_connect("localhost","root","") or die("could not connect");
$db=mysqli_select_db($conn,"jsondb");
$qry="select * from register where email='".$username."' and pass='".$password."';";

$n=mysqli_query($conn,$qry);
if(mysqli_fetch_array($n))
echo "login successful";
else 
	echo "login not successful";
?>


