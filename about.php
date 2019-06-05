<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Food-a-Door</title>
			<link rel="stylesheet" type="text/css" href="navbar.css"></link>
			<link rel="stylesheet" type="text/css" href="footer.css"></link>
			<link rel="stylesheet" type="text/css" href="about.css"></link>
			<link rel="stylesheet" type="text/css" href="homecss.css"></link>
			<style>
				#hey:hover #options{
					display:block;
				}
				#hey,#hey a{
					text-align:left;
				}
				#options{
					background-color:rgba(0,0,0,0.5);
					margin-top:29px;
					display:none;
				}
				#options li{
					margin-left:0px;
				}
				#options li>a{
					margin-left:0px;
					text-align:left;
				}
			</style>
</head>

<body>
<div class="wrapper" style="margin:0px;padding:0px;">
	<?php include("navbar.php")?>
	<div>
		<div id="back">
			<div id="main-box">
				<div id="logo1">
					<p>Bad meal is not good for anyone.</p>
				</div>
			</div>
		</div>
		<div style="text-align:center;padding:1%;" id="aboutus" class="container">
			<h2>We do this by</h2>
			<br/>
			<div class="details">
				<h3>Helping people discover great places around them.</h3>
				<p>Our team gathers information from every restaurant on a regular basis to ensure our data is fresh.</p><br/>
			</div>
			<div class="details">
				<h3>Building amazing experiences around dining.</h3>
				<p>Starting with information for over all the restaurants, cafes, lounges and local vendors, we're making dining smoother and more enjoyable with services like online ordering and table reservations.</p><br/>
			</div>
			<div class="details">
				<h3>Enabling restaurants to create amazing experiences.</h3>
				<p>With dedicated engagement and management tools, we're enabling restaurants to spend more time focusing on food itself, which translates directly to better dining experiences.</p><br/>
			</div>
		</div>
		<!-- <div id="app" style="text-align:center;padding:25px;">
			<table>
				<tr>
					<td><img src="../images/app.png" height="150px" width="220px"></td>
					<td width="100%"><p id="tag">Download our android app from google play store</p></td>
					<td><img src="../images/qrcode.png" height="100px" width="100px"></br><b>Scan the qrcode to download our app now.</b></td>
				</tr>
			</table>
		</div> -->
		<div id="comments">
			<h2>Thats how I feel</h2>
			<br/>
			<table style="padding-top:10px;">
			<tr>
				<td class="comment">
					<fieldset>
						<img src="food/5.jpg" class="img">
						<p>Well I had this wonderful experience while my relatives were here and I had to get </p>
					</fieldset>
				</td>
				<td class="comment">
					<fieldset>
						<img src="food/5.jpg" class="img">
						<p>Well I had this wonderful experience while my relatives were here and I had to get </p>
					</fieldset>
				</td>
				<td class="comment">
					<fieldset>
						<img src="food/5.jpg" class="img">
						<p>Well I had this wonderful experience while my relatives were here and I had to get </p>
					</fieldset>
				</td>
				<td class="comment">
					<fieldset>
						<img src="food/5.jpg" class="img">
						<p>Well I had this wonderful experience while my relatives were here and I had to get </p>
					</fieldset>
				</td>
			</tr>
			</table>
			<h3 id="review"><a href="review.php">For more reviews and rating</a></h3>
		</div>

		<div id="footer">
		<?php include("footer.php")?>
			<div id="form">
					<p>Sign up for special offers</p>
					<form>
						<input type="email" class="button" name="email" required placeholder="Email"/></br>
						<input type="tel" class="button" name="contact" required placeholder="Contact number"/></br>
						<input style="width:242px;" type="submit" class="button" id="submit" name=submit" value="Send me treat"/>
					</form>
			</div>
			<div class="knowus">
					<p>Get to know us</p>
					<ul class="list">
						<li><a href="#">About food-a-door</a></li>
						<li><a href="#">Our app</a></li>
						<li><a href="#">Reviews and rating</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
			</div>
			<div class="knowus">
					<p>Partner with us</p>
					<ul class="list">
						<li><a href="#">For restaurants</a></li>
						<li><a href="#">For delivery services</a></li>
						<li><a href="#">For corporate accounts</a></li>
						<li><a href="#">For digital marketing</a></li>
					</ul>
			</div>
			<div id="lastrow">
				<div style="position:relative;left:-600px;">
				<p style="color:white;font-size:1.1em;font-family:sans-serif;position:relative;left:-8px;">Connect with us</p>
				<table>
					<tr style="color:white;font-size:1.1em;font-family:sans-serif;position:relative;left:0px;">
							<td><a href="about.php"><img style = "color:white" src="fb.png" id="fb" alt="Facebook"/></a></td>
							<td><a href="about.php"><img style = "color:white" src="twitter.png" id="twitter" alt="Twitter"/></a></td>
							<td><a href="about.php"><img style = "color:white" src="youtube.png"id="youtube" alt="Youtube"/></a></td>
						</tr>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
