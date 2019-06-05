//<?php 
session_start();
if(!isset($_SESSION["ID"]))
		{
			header('Location:login.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="restaurants.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
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
	<!--div class="row1">
		<a href="menu.php"><img src="restaurants lists/flo.png" alt="salim" onmouseover="this.src='restaurants lists/wflo.png'" onmouseout="this.src='restaurants lists/flo.png'"></a>

		<a href="menu.php"><img src="restaurants lists/valley.png" alt="salim" onmouseover="this.src='restaurants lists/wvalley.png'" onmouseout="this.src='restaurants lists/valley.png'"></a>

		<a href="menu.php"><img src="restaurants lists/earth.png" alt="salim" onmouseover="this.src='restaurants lists/wearth.png'" onmouseout="this.src='restaurants lists/earth.png'"></a>

		<a href=""><img src="restaurants lists/hundred.png" alt="salim" onmouseover="this.src='restaurants lists/whundred.png'" onmouseout="this.src='restaurants lists/hundred.png'"></a>

		<a href=""><img src="restaurants lists/salim.png" alt="salim" onmouseover="this.src='restaurants lists/wsalim.png'" onmouseout="this.src='restaurants lists/salim.png'"></a>

		<a href=""><img src="restaurants lists/lava.png" alt="salim" onmouseover="this.src='restaurants lists/wlava.png'" onmouseout="this.src='restaurants lists/lava.png'"></a>

		<a href=""><img src="restaurants lists/velkitchen.png" alt="salim" onmouseover="this.src='restaurants lists/wvelkitchen.png'" onmouseout="this.src='restaurants lists/velkitchen.png'"></a>

		<a href=""><img src="restaurants lists/velkitchen.png" alt="salim" onmouseover="this.src='restaurants lists/wvelkitchen.png'" onmouseout="this.src='restaurants lists/velkitchen.png'"></a>

		<a href=""><img src="restaurants lists/velkitchen.png" alt="salim" onmouseover="this.src='restaurants lists/wvelkitchen.png'" onmouseout="this.src='restaurants lists/velkitchen.png'"></a>

		<a href=""><img src="restaurants lists/velkitchen.png" alt="salim" onmouseover="this.src='restaurants lists/wvelkitchen.png'" onmouseout="this.src='restaurants lists/velkitchen.png'"></a>

	</div-->
	<div class="row1">
		<table cellspacing="25" align="center" id="icon">
			<tr>
		<?php
							$cout = 0;
							$conn = mysqli_connect("localhost","root","","dabba");
							$query = "select * from restaurants";
							$result = mysqli_query($conn,$query);
							while ($show = mysqli_fetch_array($result)){
								echo "<td class=\"item\"><a href=\"menu.php?rest=" . $show['Name'] . "\" class=\"item1\">" . $show['Name'] . "</td>";
								$cout++;
								if ($cout == 4) {
									echo "</tr><tr>";
									$cout=0;
								}
							}
							echo "</tr></table></div>";

						?>
<!--
	<div class="row1">
		<table cellspacing="25" align="center" id="icon">
			<tr>
				<td class="item">
					<a href="#" class="item1">
					Earth plate
					</a>
				</td>
				<td class="item">
					<a href="#" class="item1">
					Salim dhaba
					</a>
				</td>
				<td class="item">
					<a href="#" class="item1">
					Vellore Kitchen
					</a>
				</td>
				<td class="item">
					<a href="#" class="item1">
					Hundreds heritage
					</a>
				</td>
			</tr>
			<tr>
				<td class="item">
					<a href="#" class="item1">
					Lava cakes
					</a>
				</td>
				<td class="item">
					<a href="#" class="item1">
					Flo
					</a>
				</td>
				<td class="item">
					<a href="#" class="item1">
					Chandi chowk
					</a>
				</td>
				<td class="item">
					<a href="#" class="item1">
					Valley junction
					</a>
				</td>
			</tr>
		</table>
	</div>
-->

	<?php include("navbar.php")?>
	<div id="footer" style="position:absolute;top:755px;left:0px;">
	<?php include("footer.php")?>
					<div id="form">
							<p>Sign up for special offers</p>
							<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
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
</body>
</html>