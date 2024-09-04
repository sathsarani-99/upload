<?php session_start();
if(!isset($_SESSION["username"]))
{
	header('Location:login.php');
}
if(isset($_POST["btnsubmit"]))
{
		date_default_timezone_set('Asia/Colombo');
		$date=date('y-m-d h:i');
		$username=$_POST["txtuser"];
		$question=$_POST["txtquestion"];
		$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		$sql="INSERT INTO `question` (`Qid`, `question`, `date`, `user`) VALUES (NULL, '".$question."', '".$date."', '".$username."');";
		if(mysqli_query($con,$sql))
		{
			header('Location:qestion page.php');
		}
		else
		{
			echo "Fail to add a question. Please try again later.";
		}
}
?>
	