<?php session_start();
$id=$_GET["id"];
$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
	$sql="DELETE FROM `beverages` WHERE `number`='".$id."';";
if(mysqli_query($con,$sql))
{
	header('Location:delete beverages page.php');
}
else
{
	echo "Could not delete the value. Try again later";
}
?>