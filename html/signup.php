<?php
if (isset($_POST["submit"]))
{
	$name=$_POST["t1"];
		$email=$_POST["e1"];
			$pass=$_POST["p1"];
				$mob=$_POST["n1"];
				$conn=mysqli_connect("localhost","root","") or die("could not connect");
$db=mysqli_select_db($conn,"jsondb");
$qry="insert into register values('".$name."','".$email."','".$pass."','".$mob."');";
$n=mysqli_query($conn,$qry);
if($n)
{
	?>
<script>
alert("record inserted");
window.location.assign("index_1.html");
</script>
<?php
}
else
	echo "record not inserted";
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<body>
<h2> New User registration </h2>
<form action="signup.php" method="post">
<table>
<tr>
<td> <input type="text" name="t1" placeholder="Enter Name" required> </td>
</tr>
<tr>
<td> <input type="email" name="e1" placeholder="Enter Email" required> </td>
</tr>
<tr>
<td> <input type="password" name="p1" placeholder="Enter Password" required pattern="[^'\x22]+" title="( ' ) Single quotes are not allowed"></td>
</tr>
<tr>
<td> <input type="number" name="n1" placeholder="Enter Mobile No." required> </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Sign Up"> </td>
</tr>
</table>
</form>
</body>
</html>