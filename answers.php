<?php
$question=$_POST["qnum"];
$answer=$_POST["txtanswer"];
echo $answer;
$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		$sql="UPDATE `question` SET `answer`='".$answer."' WHERE `Qid`='".$question."'";
	if(mysqli_query($con,$sql))
		{
			header('Location:Admins answers.php');
		}
		else
		{
			echo "Fail to add a comment. Please try again later.";
		}
?>