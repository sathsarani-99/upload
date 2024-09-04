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
<title>My profile</title>
	<link rel="stylesheet" type="text/css" href="headingStyle.css">
	<link rel="stylesheet" type="text/css" href="My profile page css.css">
	<script>
		function changecontact()
		{
			var val=prompt("Enter new contact number");
			document.getElementById("txtcontact").value=val;
		}
		function changeaddress()
		{
			var val=prompt ("Enter new Address");
			document.getElementById("txtaddress").value=val;
		}
		function lastalert()
		{
			alert("New data is saved successfully");
		}
		</script>
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
	
	<?php
	$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
	$sql="SELECT * FROM `user` WHERE `email`='".$_SESSION["username"]."';";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_assoc($result);	
	
	?><form name="changeVariables" action="My profile page.php" method="post">
<table width="531" height="435" border="0" align="center"bgcolor=" #584114">
  <tbody>
    <tr>
      <td colspan="2" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; text-align: center; font-size: 36px; color: #FFFFFF;">My profile</td>
    </tr>
    <tr>
      <td colspan="2" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; text-align: center; font-size: 36px;"><img src="Images/Images for login,register,my profile/profile picture photo.jpg" width="240" height="237" alt=""/></td>
    </tr>
    <tr>
      <td width="106" style="font-size:18px;color: #FFFFFF; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Full Name</td>
      <td width="371" style="font-size:18px;color: #FFFFFF; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><?php echo $row["name"];?>&nbsp;</td>
    </tr>
    <tr>
      <td style="font-size:18px;color: #FFFFFF; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Email</td>
      <td style="font-size:18px;color: #FFFFFF; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><?php echo $row["email"];?>&nbsp;</td>
    </tr>
    <tr>
      <td style="font-size:18px;color: #FFFFFF; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Contact Number</td>
      <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input type="text" name="txtcontact" id="txtcontact" value="<?php echo $row["contact"];?>">&nbsp;<input type="button" name="btnedit	" id="btnedit	" value="Edit" onClick="changecontact()"></td>
    </tr>
    <tr>
      <td style="font-size:18px;color: #FFFFFF; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Address </td>
      <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input type="text" name="txtaddress" id="txtaddress" value="<?php echo $row["address"];?>">&nbsp;<input type="button" name="btnedit2" id="btnedit2" value="Edit" onClick="changeaddress()"></td>
    </tr>
    <tr>
      <td colspan="2" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><a href="Homepage.html"><input type="button" name="button" id="button" value="Back">
          <input type="submit" name="btnsubmit" id="btnsubmit" value="Save changes" onClick="lastalert()">
      </a></td>
    </tr>
    <tr>
      <td colspan="2" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>
		  <?php
		$uname=$_SESSION["username"];
		echo"
       <a href='Purchase history.php?uname=".$uname."'> <input type='button' name='btnhistory' id='btnhistory' value='View Purchase History'></a>"
		  ?>
      </p></td>
    </tr>
  </tbody>
</table>
	</form>
	
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
</div>
<?php	 
		}
	
		mysqli_close($con);
		?>
<?php

if(isset($_POST["btnsubmit"])){
	$newaddress=$_POST["txtaddress"];
	$newcontact=$_POST["txtcontact"];
	$useremail=$_SESSION["username"];
	$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		//fine
		
	 $sql= "UPDATE `user` SET `address`='".$newaddress."',`contact`='".$newcontact."' WHERE `email`='".$useremail."';";
	mysqli_query($con,$sql);
				
		
	}?>
</body>
</html>