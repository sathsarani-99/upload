<?php session_start();
if(!isset($_SESSION["username"]))
{
	header('Location:login.php');
}
	?>	
<?php
if(isset($_POST["btnsubmit"]))
{
		date_default_timezone_set('Asia/Colombo');
		$date=date('y-m-d h:i');
		$username=$_POST["txtuser"];
		$comment=$_POST["txtcomment"];
		$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		$sql="INSERT INTO `comment` (`Cname`, `Date`, `description`, `commentID`) VALUES ('".$username."', '".$date."', '".$comment."', NULL);";
		if(mysqli_query($con,$sql))
		{
			header('Location:Comment page.php');
		}
		else
		{
			echo "Fail to add a comment. Please try again later.";
		}
}
?>
	