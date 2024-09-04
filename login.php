<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login page</title>
<link rel="stylesheet" type="text/css" href="login_style.css">
<link rel="stylesheet" type="text/css" href="headingStyle.css">
</head>
<body>
	<form name="login" action="login.php" method="post">
	<table align="center">
		<tbody>
			<tr>
				<td>
					<img src="Images/Logo/coffee beans and brew cafe logo.JPG" width="232" height="171" alt=""/></td>
				<td><div class="heading"><ul>
					<li> <b><a href="Homepage.html">Home</a></b></li>
					<li><b><a href="About Us.html">About Us</a></b></li>
					<li>
					  <div class="dropdown" align="left">
  							<button class="dropbtn"><b>Products</b></button>
  							<div class="dropdown-content">
    							<a href="beverages.php">Beverges</a>
    							<a href="Food Items.php">Food Items</a>
  							</div>
						</div>
					</li>
					<li><b><a href="login.php">Login</a></b></li>
					<li><b><a href="Register.php">Sign Up</a></b></li>
					<li><b><a href="My profile page.php">My profile</a></b></li>
					<li>
					  <div class="dropdown" align="left">
  							<button class="dropbtn"><b>Help and Feedback</b></button>
  							<div class="dropdown-content">
    							<a href="qestion page.php">Qestions</a>
    							<a href="Comment page.php">Comments</a>
  							</div>
						</div>
					</li>
					<li><a href="cart page.php"><img src="Images/Logo/shopping cart logo design.jpg" width="37" height="33" alt=""></a></li>
				</ul></div>
			</td>
			</tr>
		</tbody>
	</table>
    <div class="container">
		<div class="left">
			<img src="Images/Images for login,register,my profile/photo-1561047029-3000c68339ca.jpg" height="438" width="322">
        </div>
		<div class="right">
		  <lable>
		    <p style="font-size: 51px;"><b>Login</b></p>
		    <p style="font-size: 24px">UserName</p>
		  </lable>
		<input type="text" name="txtuname" id="txtuname" required/>
			<lable>
			<p>&nbsp;</p>
		  <p><span style="font-size: 24px">Password</span>
</password>
			</p>
		  <p>
			  <input type="password" name="txtpassword" id="txtpassword" required/>
		  </p>
		  <p>&nbsp;</p>
			<p>
			  <input type="submit" name="btnsubmit" id="btnsubmit" value="Login">
            </p>
		
      </div>
</div>
	<div>
		&nbsp;
		<p><br>
		  &nbsp;<br>
		  &nbsp;</p>
		<p>&nbsp;</p>
</div>
	<?php
	if(isset($_POST["btnsubmit"]))
	{
		$username=$_POST["txtuname"];
		$password=$_POST["txtpassword"];
		$valid=false;
		$Avalidate=false;
		if($username=='Admin' and $password=='Admin')
		{
			$Avalidate=true;
		}
		echo $Avalidate;
		if($Avalidate)
		{
				$_SESSION["username"]=$username;
			if(!isset($_SESSION["username"]))
			{
				echo "error";
			}
			else
			{
				header('Location:Admin.php');
			}
		
		}
		$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		$sql="SELECT * FROM `user` WHERE `email`='".$username."' and `password` ='".$password."';";
		$result= mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			$valid=true;
		}
		else
		{
			$valid=false;
		}
		if($valid)
		{
			$_SESSION["username"]=$username;
			if(!isset($_SESSION["username"]))
			{
				echo "error";
			}
			else
			{
				header('Location:Homepage.html');
			}
		
		}
		else
		{
			echo "Your password or user name is not correct. Please try again.";
		}
	}
	?>
	
	
<div class="contact">
		<table width="970" align="center"><tbody><tr>
		  <td width="427">
		<h1>Find Us<br>
			</h1>
		<h2>No 15-Joseph Lane,<br>
		    Colombo 4 Tel:0112343445				</h2>
			<h2>No 34A-Gregory's road,<br>Colombo 7 Tel:0112345444</h2>
		  <p>&nbsp;</p></td>
		  <td width="373"><h1>Mail Us<span style="color: #5E3A16"></span><br>
			</h1>
		    <h2>cofeebeanscafe.gmail.com</h2>
			
			<p style="font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color: #5E3A16;"><h1>Follow Us on Facebook</h1>
			</p>
		    <p style="color: #FFFFFF; font-size: 16px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;"><span style="color: #FFFFFF"><h2>cofeebeans@colombo</h2></span></p>
		    <p>&nbsp;</p>
		  <td width="154"><p style="color: #D7C28A; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;"><h1>Visit Us</h1></p>
          <p style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 16px; color: #FFFFFF;"><h2>www.cofeebeans.lk</h2></p>
          <p style="color: #D7C28A; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">&nbsp;</p>
          <p style="color: #D7C28A; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">&nbsp;</p>
          <p style="color: #D7C28A; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">&nbsp;</p></td></td></tr>               
		</tbody></table>
</div>
</form>
</body>
</html>