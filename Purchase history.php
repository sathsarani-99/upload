<?php session_start();
if(!isset($_SESSION["username"]))
{
	header('Location:login.php');
}
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Purchase history page</title>
	<link rel="stylesheet" type="text/css" href="headingStyle.css">
</head>

<body>
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
&nbsp;
	&nbsp;
	&nbsp;
	&nbsp;
	&nbsp;

	
<table width="409" height="212" border="1" align="center" bgcolor=" #584114">
      <tbody>
        <tr>
          <td colspan="3"style="text-align: center;color: white;font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 24px;"><strong>View Purchase History</strong></td>
        </tr>
        <tr>
          <td width="140" style="color: white;font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">UserName</td>
          <td colspan="2" style="color: white;font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input name="txtname" type="text" id="txtname" value="<?php echo $_SESSION["username"]?>" size="25px"></td>
        </tr>
        <tr>
          <td colspan="3" style="color: white;text-align: center; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 18px;"><strong>Purchase History</strong></td>
        </tr>
        <tr>
          <td style="color: white;font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 18px;">Date</td>
          <td width="149" ><span style="color: white;font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 18px;">Total Quantity</span></td>
          <td width="98" style="color: white;font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 18px;" >Total Price</td>
        </tr>
        
        
       	<?php
		$uname=$_SESSION["username"];
		$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		$sql="SELECT * FROM `buy` WHERE `cname`='".$uname."';";
		$result= mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
	?><tr>
          <td style="color: white;font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><?php echo $row["date"]?></td>
          <td style="color: white;font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><?php echo $row["qty"]?></td>
		  <td style="color: white;font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><?php echo $row["price"]?></td>
        </tr>
		  <?php
			}
		}
?>
      </tbody>
</table>

<p style="text-align: center">&nbsp;</p>
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
			</h1>s
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
</div>
</body>
</html>