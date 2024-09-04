<?php session_start();
if(!isset($_SESSION["username"]))

	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comment page</title>
	<link rel="stylesheet" type="text/css" href="headingStyle.css">
	<link rel="stylesheet" type="text/css" href="comment style.css">
	<style>
		input[type=button], input[type=submit], input[type=reset] {
  background-color: lightgoldenrodyellow;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
border-radius: 18px ;
  cursor: pointer;
}
		input[type=text]
		{
			border-radius: 6px ;
		}
		</style>
</head>

<body><form name="sendcomment" action="Add comment page.php" method="post">
<table align="center">
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
<table align="center" bgcolor=" #584114" width="800"><tbody>
		<tr><td width="275">&nbsp;</td></tr>
		<?php
			$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
			$sql="SELECT * FROM `comment`;";
			$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				echo"<tr>
		  <td colspan='2' align='center' style='text-align: left' style='font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color: #D7C28A;'><p>".$row["Cname"]." &nbsp;".$row["Date"]."</p>
		    <p>".$row["description"]."</p>
		  <td></tr>";
			}
		}
			?>
	&nbsp;
	&nbsp;
	&nbsp;<br>
	&nbsp;<br>
	&nbsp;
<p>&nbsp;</p>
<p>&nbsp;</p>
		<tr><td colspan="2" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; text-align: center; font-size: 36px;color: white;">Add comment</td></tr>
		<tr><td style="text-align: center"><p>UserName</p></td><td width="513" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input name="txtuser" type="text" id="txtuser" size="50px"></td></tr>
		<tr><td height="71" style="text-align: center"><p>Comment<p></td><td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><textarea name="txtcomment" cols="50" rows="10" id="txtcomment"></textarea>
    </textarea></td></tr>
		<tr>
		  <td height="71" colspan="2" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; text-align: center;"><input type="submit" name="btnsubmit" id="btnsubmit" value="Add">
	      <input type="reset" name="btnreset" id="btnreset" value="Cancel"></td>
  </tr>
		</tbody></table>

  <p>&nbsp;</p>
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
			
			<p style="font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color: #D7C28A;"><h1>Follow Us on Facebook</h1></p>
		    <p style="color: #FFFFFF; font-size: 16px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;"><span style="color: #FFFFFF"><h2>cofeebeans@colombo</h2></span></p>
		    <p>&nbsp;</p>
		  <td width="154"><p style="color: #D7C28A; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;"><h1>Visit Us</h1></p>
          <p style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 16px; color: #FFFFFF;"><h2>www.cofeebeans.lk</h2></p>
          <p style="color: #D7C28A; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">&nbsp;</p>
          <p style="color: #D7C28A; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">&nbsp;</p>
          <p style="color: #D7C28A; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">&nbsp;</p></td></td></tr>               
	  </tbody></table>
</div></form>
</body>
</html>