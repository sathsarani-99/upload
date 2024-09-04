<?php session_start();
if(!isset($_SESSION["username"]))
{
	header('Location:login.php');
}
	?>

<?php
 $id=$_GET["id"];
$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
 $sql="DELETE FROM `cart` WHERE `email`='".$_SESSION["username"]."' and `CartID`='".$id."';";
if(mysqli_query($con,$sql))
{
	header('Location:cart page.php');
}
else
{
	echo "try again later";
}
?>