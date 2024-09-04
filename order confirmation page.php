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
<title>Order confirmation page</title>
	<link rel="stylesheet" type="text/css" href="headingStyle.css">
	<style>
			input {
  border-top-style: hidden;
  border-right-style: hidden;
  border-left-style: hidden;
  border-bottom-style: hidden;
}
		
		input[type=button], input[type=submit], input[type=reset] {
  background-color: lightgoldenrodyellow;
  border: 1px black;
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
		table
		{
			border-collapse: collapse;
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
&nbsp;
	&nbsp;
	&nbsp;
	&nbsp;
	&nbsp;
<table width="818" border="1" align="center"><form method="post" name="confirm order" action="save to buy.php">
      <tbody>
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
			while($row=mysqli_fetch_assoc($result))
			{
		  ?>
        <tr>
          <td colspan="2" style="text-align: center; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 24px;">Order Summery</td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 24px;"><img src="Images/Logo/coffee beans and brew cafe logo.JPG" width="339" height="301" alt=""/></td>
        </tr>
        <tr>
          <td width="206" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Full Name</td>
          <td width="639" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input name="txtname" type="text" id="txtname" value="<?php echo $row["name"]?>" size="30px"></td>
        </tr>
        <tr>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Email</td>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input name="txtemail" type="text" id="txtemail" value="<?php echo $row["email"]?>" size="30px"></td>
        </tr>
        <tr>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Contact</td>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input name="txtcontact" type="text" id="txtcontact" value="<?php echo $row["contact"]?>" size="30px"></td>
        </tr>
        <tr>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Address</td>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input name="txtaddress" type="text" id="txtaddress" value="<?php echo $row["address"]?>" size="30"></td>
        </tr>
		  <?php
			}
		}
		  ?>
		
        <tr>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Items</td>
			
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input name="txtheading" type="text" id="txtheading" value="Product name" size="20" readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="txtheading2" type="text" id="txtheading2" value="Quantity" size="20"readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="txtheading3" type="text" id="txtheading3" value="Price" size="20"readonly><br><?php
		   $con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		  $total=0;
		$totproducts=0;
		$sql="SELECT `Pname`, `price`,`qty` FROM `cart` WHERE `email`='".$_SESSION["username"]."';";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
		  		echo "<input type='text' name='txtproduct' id='txtproduct' value='".$row["Pname"]."' readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='txtqty' id='txtqty' value='".$row["qty"]."'readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='txtprice' id='txtprice' value='".$row["price"]."'readonly>";
				echo "<br>";
			$totproducts=$totproducts+$row["qty"];
			  $total=$total+intval($row["price"]);
			}
		}
		   ?></td>
			
        </tr>
        <tr>
        <tr>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Qty</td>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><input name="txtproducts" type="text" id="txtproducts" size="30px" value="<?php echo $totproducts?>"></td>
        </tr>
        </tr>
		  
        <tr>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Total price</td>
          <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Rs.<input name="txttotal" type="text" id="txttotal" size="30px" value="<?php echo $total?>"></td>
        </tr>
			 
        <tr>
          <td colspan="2" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif"><p style="text-align: center">We use cash on delivery service for ensure the safty of the clients and well as venders money . Please prepare the due amount at the time our employee visit at your place to avoid the delays. </p>
          <p style="text-align: center">Thank you for ordering.</p>
          <p style="text-align: center">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Confirm Order">
            <input type="reset" name="btnreset" id="btnreset" value="Cancel order">
          </p></td>
        </tr>
      </tbody></form>
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