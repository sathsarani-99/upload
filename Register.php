<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login page</title>
<link rel="stylesheet" type="text/css" href="Registerstyle.css">
	<link rel="stylesheet" type="text/css" href="headingStyle.css">
	<script>
		function checkContact()
	{
		var cont=document.getElementById("txtnum").value;
		if((!isNaN(cont)) && (cont.length==10))
			{
				return true;
			}
		alert("Please enter correct contact number");
		return false;
	}
		function checkEmail()
		{
			var email=document.getElementById("txtemail").value;
			var p1=email.split("@");
			if(p1[1]=="gmail.com")
				{
					return true;
				}
			else
				{
					alert("Please enter email again. Format shoud be like ______@gmail.com")
					return false;
				}
		}
		function checkpassword()
		{
			var password=document.getElementById("password").value;
			var cpassword=document.getElementById("txtpassword").value;
			if(password==cpassword)
				{
					return true;
				}
			else
				{
					alert("please enter same value to password and confirm password");
					return false;
				}
		}
		function checkall()
		{
			if((checkContact())&&(checkEmail())&&(checkpassword()))
				{
					alert("successfully registered");
				}
			else
		{
			event.preventDefault();
		}
		}
		</script>
</head>
<body>
	<form action="Register.php" method="post">
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
			<img src="Images/images for login,register,my profile/pexels-photo-312418.jpeg" height="778" width="482">
        </div>
		 <div class="right">
		 
		    <p style=" font-size: 45px"><b>Register</b></p>
		    <p style="font-size: 18px">Full name</p>
		  
		<input name="txtname" type="text" required id="txtname" size="30px"/>
			<lable>
		   <p><span style="font-size: 18px">E-mail</span>
		    </password>
		   </p>
		  <p>
			  <input name="txtemail" type="email" required id="txtemail" size="30px"/>
		  </p>
		  <p>Address</p>
		  <p>
		    <textarea name="txtaddress" cols="28" id="txtaddress"></textarea>
		  </p>
		  <p>Contact Number</p>
		  <p>
		    <input name="txtnum" type="text" id="txtnum" size="30px">
          </p>
		  <p>password</p>
		  <p>
		    <input name="password" type="password" id="password" size="30px">
		  </p>
		  <p>confirm password</p>
		  <p>
		    <input name="txtpassowrd" type="password" id="txtpassword" size="30px">
		  </p>
			<p>
			  <input type="submit" name="btnsubmit" id="btnsubmit" value="Register" onClick="checkall()">
				<input type="reset" name="btnreset" id="btnreset" value="Cancel"><br>
				<a href="login.php">Already have an account?</a>
            </p>
			<p></p>
		
      </div>
</div>
	<div>&nbsp;
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	</div>
<?php
	if(isset($_POST["btnsubmit"]))
	{
		$name=$_POST["txtname"];
		$email=$_POST["txtemail"];
		$address=$_POST["txtaddress"];
		$contact=$_POST["txtnum"];
		$password=$_POST["txtpassowrd"];
		$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		$sql="INSERT INTO `user` (`name`, `email`, `address`, `contact`, `password`) VALUES ('".$name."', '".$email."', '".$address."', '".$contact."', '".$password."');";
		mysqli_query($con,$sql);
		header('Location:login.php');
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