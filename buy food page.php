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
<title>Buy Page</title>
	<link rel="stylesheet" type="text/css" href="headingStyle.css">
	<script>
		function calprice()
		{
			var qty=document.getElementById("txtqty").value;
			var Uprice=document.getElementById("txtuprice").value;
			var total=qty*Uprice;
			document.getElementById("txttotal").value=total;
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
		$bid=$_GET["id"];
		$con= mysqli_connect("localhost","root","","project_db");
				  if(!$con)
				  {
						die("can not connect to DB server");
				  }
	
	$sql="SELECT `number`,`name`,`price` FROM `food` WHERE `number`='".$bid."';";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
				{
		while($row=mysqli_fetch_assoc($result))
					{
	
	?>
&nbsp;
	&nbsp;
	&nbsp;
	&nbsp;
	&nbsp;
<table width="415" border="0" align="center" bgcolor="#BD7F0B"><form name="product" method="post" action="save to cart(Food items).php">
      <tbody>
        <tr>
          <td colspan="2" style="text-align: center; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 24px;">Buy product</td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 24px;"><img src= "Images/Logo/coffee beans and brew cafe logo.JPG"></td>
        </tr>
        <tr>
          <td width="204" height="37" style="font-size: 24px;padding:20px"> Product Name</td>
          <td width="201" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input type="text" name="txtname" id="txtname" value="<?php echo $row["name"]?>" readonly></td>
        </tr>
        <tr>
          <td height="40" style="font-size: 24px;padding:20px"> Unit price</td>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input type="text" name="txtuprice" id="txtuprice"value="<?php echo $row["price"]?>" readonly></td>
        </tr>
        <tr>
          <td height="40" style="font-size: 24px;padding:20px">Quantity</td>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input type="text" name="txtqty" id="txtqty"></td>
        </tr>
        <tr>
          <td height="40" style="font-size: 24px;padding:20px">Total</td>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input type="text" name="txttotal" id="txttotal" onMouseOver="calprice()" readonly></td>
	    </tr>
   		 <td height="50" colspan="2" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">
          <p style="text-align: center">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Add to cart">
            <a href="beverages.php"><input type="button" name="btnback" id="btnback" value="Back"></a>
          </p></td>
        </tr>
      </tbody></form>
</table>
<?php
		
		}
	}
	
	
?>
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
</body>
</html>