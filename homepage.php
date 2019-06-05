<?php 
session_start();
?>
<!DOCTYPE html>
<html>
		<head>
			<title>Dabbawala.in</title>
			<link rel="stylesheet" type="text/css" href="navbar.css"></link>
			<link rel="stylesheet" type="text/css" href="footer.css"></link>
			<link rel="stylesheet" type="text/css" href="homecss.css"></link>	
			<script type="text/javascript">
			var x=0;
				function load() {
					window.location.href = "menu.php";
				}
				
			</script>
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
		<div id="slider">
				<img id="backimage" src="food/desert.jpg" alt="sorry cant show" />
			<div id="resform">
					<form id="myform" name="myform" action="menu.php" method="GET">
					<div>
						<select id="reschoice" name="reschoice" style="color: white; font-style:oblique; font-size: 110%"> 
						<?php
							$conn = mysqli_connect("localhost","root","","dabba");
							$query = "select * from restaurants";
							$result = mysqli_query($conn,$query);
							while ($show = mysqli_fetch_array($result)){
							echo "<option style = \"color:white; background-color:#A4A4A7\" value=\"{$show['Name']}\">" . $show['Name'] . "</option>";
							}
						?>
						</select>
					</div>
					<div>
						<input type="submit" id="search" value="Search"></input>
					</div>
					</form>
					</div>	
				<div id="slidercaption">
					<h1 id="captionquote">Never Miss a meal Again...</h1>
				</div>	
			</div> 
			<div class="wrap">
			<?php include("navbar.php")?>
			<div id="work">
				<h1>How it works</h1>
				<table id="hiw" align="center">
					<tr id="icons">
						<td><img src="order.png" class="icon"></td>
						<td><img src="prepare.png" class="icon"></td>
						<td><img src="delivery1.png" class="icon"></td>
					</tr>
					<tr id="head">
						<td>Order</td>
						<td>Prepare</td>
						<td>Deliver</td>
					</tr>
					<tr id="detail">
						<td>
							The ordering platforms feature a clean and contemporary design for a quick & seamless ordering, tracking and payment experience.
						</td>
						<td>
							Food is prepared as soon as you press the order button. Proper hygine and cleanliness is maintained in our kitchens.
						</td>
						<td>
							Our delevering is engineered to keep the food fresh, hot and easy to consume. Our delivery bags maintain food integrity through the delivery cycle.
						</td>
					</tr>
				</table>
			</div><br>
			<div id="footer">
			<?php include("footer.php")?>
				<div id="form">
						<p>Sign up for special offers</p>
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
							<input type="email" class="button" name="email" required placeholder="Email"/></br>
							<input type="tel" class="button" name="number" required placeholder="Contact number"/></br>
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
					<p style="color:white;font-size:1.1em;font-family:sans-serif;position:relative;left:0px;">Connect with us</p>
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
		</body>
</html>