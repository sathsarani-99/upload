<?php session_start();	
	$pname=$_POST["txtname"];
	$username=$_SESSION["username"];
	$qty=$_POST["txtqty"];
	$total=$_POST["txttotal"];
	$date=date('y-m-d');
$con= mysqli_connect("localhost","root","","project_db");
				  if(!$con)
				  {
						die("can not connect to DB server");
				  }
		$sql="INSERT INTO `cart` (`CartID`, `email`, `Pname`, `price`, `date`,`qty`)  VALUES (NULL,'".$username."', '".$pname."','".$total."', '".$date."','".$qty."');";
		if(mysqli_query($con,$sql))
		{
			header('Location:Food Items.php');
		}
		else
		{
			echo "Fail to add to cart. Please try again later.";
		}
	
?>