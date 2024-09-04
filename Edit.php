<?php session_start();?>
<?php
$num=$_POST["txtnum"];
$name=$_POST["txtname"];
$description=$_POST["txtdescription"];
$price=$_POST["txtprice"];
$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
	$sql="UPDATE `beverages` SET `name`='".$name."',`description`='".$description."',`price`='".$price."' WHERE `number`='".$num."';";
if(mysqli_query($con,$sql))
{
	header('Location:Admin.php');
}
else
{
	echo "Could not update the value. Try again later";
}
?>