<?php session_start();
if(!isset($_SESSION["username"]))
{

}
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit product</title>
	<link rel="stylesheet" type="text/css" href="headingStyle.css">
</head>
	<body><form name="edit" action="Edit.php" method="post">
<table align="center">
		<tbody>
			<tr>
			  <td>
	<img src="Images/Logo/coffee beans and brew cafe logo.JPG" width="232" height="171" alt=""/></td>
	<td><div class="heading"><ul>
		<li> <b><a href="Homepage.html">Home</a></b></li>
		<li><b><a href="About Us.html">About Us</a></b></li>
		<li><div class="dropdown" align="left">
  					<button class="dropbtn"><b>Products</b></button>
  					<div class="dropdown-content">
    				<a href="beverages.php">Beverges</a>
    				<a href="Food Items.php">Food Items</a>
  					</div></div></li>
		<li><b><a href="login.php">Login</a></b></li>
		<li><b><a href="Register.php">Sign Up</a></b></li>
		<li><b>My profile</b></li>
		<li><b>Help and Feedback</b></li>
		<li><img src="Images/Logo/shopping cart logo design.jpg" width="37" height="33" alt=""></li>
	</ul></div>
		</td></tr></tbody></table>
	<?php
	$id=$_GET["id"];
	 $con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
	$sql="SELECT * FROM `beverages` WHERE `number`='".$id."';";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_assoc($result);	
		{
	?>
	<table width="401" height="152" border="1" align="center" bgcolor="#49281A">
	  <tbody>
	    <tr>
	      <td colspan="2" style="text-align: center; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 36px; color: #FFFFFF;">Edit Product</td>
        </tr>
		  <tr>
	      <td colspan="2" style="text-align: center"><p><img src="Images/Logo/coffee beans and brew cafe logo.JPG" width="355" height="289" alt=""/></p>
          <p>&nbsp;</p></td>
        </tr>
		  <tr>
	      <td height="32" style="color: #FFFFFF">Product Number</td>
	      <td><input name="txtnum" type="text" id="txtnum" size="19px" value="<?php echo $row["number"]?>"></td>
        </tr>
	    <tr>
	      <td height="32" style="color: #FFFFFF">Name</td>
	      <td><input name="txtname" type="text" id="txtname" size="19px" value="<?php echo $row["name"]?>"></td>
        </tr>
	    <tr>
	      <td height="48" style="color: #FFFFFF">Description</td>
	      <td><textarea name="txtdescription" id="txtdescription"><?php echo $row["description"]?></textarea></td>
        </tr>
	    <tr>
	      <td height="35" style="color: #FFFFFF">Price</td>
	      <td><input name="txtprice" type="text" id="txtprice" size="19px" value="<?php echo $row["price"]?>"></td>
        </tr>
	    <tr style="text-align: center">
	      <td colspan="2"><input type="submit" name="btnsubmit" id="btnsubmit" value="Edit product">
          <input type="reset" name="reset" id="reset" value="Cancel"></td>
        </tr>
      </tbody>
</table>
	<?php
	}
	}
	?>
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
</div>
</form></body>
</html>