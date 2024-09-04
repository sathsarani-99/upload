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
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="headingStyle.css">
	<style>
		body
		{
			font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
		}
		.shopping-cart {
  width: 750px;
		
  margin: 80px auto;
  background: #FFFFFF;
  box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.10);
  border-radius: 6px;
 
  display: flex;
  flex-direction: column;
}
		.title {
  height: 60px;
  border-bottom: 1px solid #E1E8EE;
  padding: 20px 30px;
  color: #5E6977;
  text-align: center;
  font-size: 45px;
  font-weight: 400;
}
		.item {
    padding: 20px 80px;
    height: 50px;
    display: flex;
    border-top: 1px solid #E1E8EE;
    border-bottom: 1px solid #E1E8EE;
    text-align: left;
}
		.quantity input {
			padding-top: 15px;
  -webkit-appearance: none;
  border: none;
  text-align: center;
  width: 40px;
  font-size: 16px;
  color: #43484D;
  font-weight: 300;
}
		
		input {
  border-top-style: hidden;
  border-right-style: hidden;
  border-left-style: hidden;
  border-bottom-style: hidden;
}
	input[type=button], input[type=submit], input[type=reset] {
  background-color: lightgoldenrodyellow;
  border: 1px solid #5E6977;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
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
	<div class="shopping-cart">
		&nbsp;
		<div class="title">
			Shopping Cart
	  </div>
	  <div class="item">
			Product Name
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <div class='quantity'>
      Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 Price
    </div>
			</div>
		<?php
		$total=0;
		$con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		$sql="SELECT `CartID`,`Pname`, `price`, `qty` FROM `cart` WHERE `email`='".$_SESSION["username"]."';";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$id=$row["CartID"];
				echo "
		<div class='item'>
			<a href='Delete cart items.php?id=$id'><img src='Images/beverages/images.png' width='40' height='40'/></a>&nbsp;&nbsp;&nbsp;<input type='text' name='txtitem' id='txtitem' value='".$row["Pname"]."' readonly>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <div class='quantity'>
      <input type='text' name='name' value='".$row["qty"]."'readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 <input type='text' name='txtprice' id='txtprice' value='".$row["price"]."'readonly>
    </div>
			</div>";
				$total=$total+intval($row["price"]);
			}
		}
				echo "
		<div class='item'>
			&nbsp;&nbsp;&nbsp;Total
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <div class='quantity'>
      <input type='text' name='name' readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 <input type='text' name='txtprice' id='txtprice' value='".$total."'readonly>
    </div>
			</div>";
				 ?>
	  <div class="item">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="order confirmation page.php"><input type="button" id="btnconfirm" name="btnconfirm" value="Confirm"></a>
		<a href="Homepage.html"><input type="button" name="button" id="button" value="Shop more"></a>
	  </div> 
</div>
	
	&nbsp;<br>
	&nbsp;<br>
	<div class="contact">
		<table width="970" align="center"><tbody><tr>
			<td width="427">
				<h1>Find Us<br></h1>
				<h2>No 15-Joseph Lane,<br>
		    	Colombo 4 Tel:0112343445</h2>
				<h2>No 34A-Gregory's road,<br>Colombo 7 Tel:0112345444</h2>
		  		<p>&nbsp;</p>
			</td>
		  	<td width="373">
				<h1>Mail Us<span style="color: #5E3A16"></span><br></h1>
		    	<h2>cofeebeanscafe.gmail.com</h2>
				<p style="font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color: #D7C28A;"><h1>Follow Us on Facebook</h1></p>
		    	<p style="color: #FFFFFF; font-size: 16px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;"><span style="color: #FFFFFF"><h2>cofeebeans@colombo</h2></span></p>
		    	<p>&nbsp;</p>
			</td>
		  	<td width="154">
				<p style="color: #D7C28A; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;"><h1>Visit Us</h1></p>
          		<p style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: 16px; color: #FFFFFF;"><h2>www.cofeebeans.lk</h2></p>
          		<p style="color: #D7C28A; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">&nbsp;</p>
          		<p style="color: #D7C28A; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">&nbsp;</p>
          		<p style="color: #D7C28A; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">&nbsp;</p>
			</td>
		</tr></tbody></table>
	</div>
</body>
</html>