<?php

if(isset($_POST["btnsubmit"]))
{

	$type=$_POST["category"];
echo $type;
	
	if(isset($_POST["Pills"]))
					{
						$category = "Pills";
					}

					if(isset($_POST["Liquid"]))
					{
						$category = "Liquid";
					}

					if(isset($_POST["Other Categories"]))
					{
						$category = "Other Categories";
					}

	$name=$_POST["txtname"];

	$image = "uploads/".basename($_FILES["fileImage"]["name"]);
				  move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);

	$description=$_POST["txtdescription"];

	$price=$_POST["price"];
	
	$quantity=$_POST["quantity"];
	
	
	
	$con=mysqli_connect("localhost","root","","hys");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
	$sql="INSERT INTO `items` (`category`, `name`, `image`, `description`, `price`, `quantity`) VALUES (NULL, '".$category."', '".$name."', '".$image."', '".$description."', '".$price."', '".$quantity."');";
		if(mysqli_query($con,$sql))
	
	if($type=='Pills')
	{
		echo "true";
		$sql="INSERT INTO `pills` ( `name`, `image`, `description`, `price`, `quantity`) VALUES (NULL, '".$name."', '".$image."', '".$description."', '".$price."', '".$quantity."');";
		if(mysqli_query($con,$sql))
		{
			 echo "File Uploaded Sucessfully";
		}
		else
		{
			echo "Could not add the beverage.Please try again.";
		}
	}
	if($type=='liquid')
	{
		$sql="INSERT INTO `liquid` ( `name`, `image`, `description`, `price`, `quantity`) VALUES (NULL, '".$name."', '".$image."', '".$description."', '".$price."', '".$quantity."');";
			if(mysqli_query($con,$sql))
		{
			 echo "File Uploaded Sucessfully";
		}
		else
		{
			echo "Could not add the food item.Please try again.";
		}
	}
	if($type=='Other Categories')
	{
		echo "true";
		$sql="INSERT INTO `othercategories` ( `name`, `image`, `description`, `price`, `quantity`) VALUES (NULL, '".$name."', '".$image."', '".$description."', '".$price."', '".$quantity."');";
		if(mysqli_query($con,$sql))
		{
			 echo "File Uploaded Sucessfully";
		}
		else
		{
			echo "Could not add the beverage.Please try again.";
		}
	}
}
?>