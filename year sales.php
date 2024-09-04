<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View sales for year</title>
	<link rel="stylesheet" type="text/css" href="headingStyle.css">
	<style>
		body
{
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", "Verdana", "sans-serif";
    text-align: center;
}
	</style>
</head>

<body>
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
<p>&nbsp;</p>
<table width="427" border="1" align="center">
          <tbody>
            <tr>
              <td colspan="2" style="text-align: center; font-size: 36px;">View Sales for Year</td>
            </tr>
            <tr>
              <td width="233">Number of customers</td>
              <td width="178">Total Price</td>
            </tr>
			  <?php
			   $con=mysqli_connect("localhost","root","","project_db");
		if(!$con)
		{
			die("Can not connect to the sql server. Please try again");
		}
		  $totalprice=0;
		$totrecords=0;
		$date=date('y');
			  $s=1;
			  $e=31;
			  $sm=1;
			  $em=12;
			  $sdate=$date.'-'.$sm.'-'.$s;
			  $edate=$date.'-'.$em.'-'.$s;
		$sql="SELECT * FROM `buy` WHERE `date` BETWEEN '".$sdate."' AND '".$edate."';";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$totalprice=$totalprice+$row["price"];
				$totrecords=$totrecords+1;
			}
		}
			  ?>
            <tr>
              <td><?php echo $totrecords?></td>
              <td><?php echo $totalprice?></td>
            </tr>
            <tr><td colspan="2" align="center">
              <a href="View sales.php">  <input type="button" name="button" id="button" value="Back"></a></td>
            </tr>
          </tbody>
</table>
<p style="text-align: center">&nbsp;</p>
        <span style="text-align: center"></span>
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