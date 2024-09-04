<?php session_start();
if(!isset($_SESSION["username"]))
{
	header('Location:login.php');
}
	?>
<?php  
    //if confirm button pressed the values will be sent to the buy page and those will be deleted from the cart.
	if(isset($_POST["btnsubmit"]))
	{
		$cname=$_SESSION["username"];
		$date=date('y-m-d');
		$totproducts=$_POST["txtproducts"];
		echo $totproducts;
		$total=$_POST["txttotal"];
		echo $total;
		$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		$sql="INSERT INTO `buy` (`cnum`, `cname`, `date`, `qty`, `price`) VALUES (NULL, '"
			.$cname."', '".$date."', '".$totproducts."', '".$total."');";
		if(mysqli_query($con,$sql))
		{
			echo "successfully entered";
		}
		else
		{
			echo "try again";
		}
		$sql2="DELETE FROM `cart` WHERE `email`='".$_SESSION["username"]."';";
		if(mysqli_query($con,$sql2))
		{
			header('Location:Homepage.html');
		}
		else
		{
			echo "try again later";
		}
	}
?>