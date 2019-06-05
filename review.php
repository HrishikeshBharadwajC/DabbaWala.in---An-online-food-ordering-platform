<?php 
session_start();
include ("include.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Food-a-Door</title>
			<link rel="stylesheet" type="text/css" href="navbar.css"></link>
			<link rel="stylesheet" type="text/css" href="footer.css"></link>
			<link rel="stylesheet" type="text/css" href="review.css"></link>
			<link rel="stylesheet" type="text/css" href="homecss.css"></link>
			<style>
				#hey:hover #options{
					display:block;
				}
				#comments p{
					font-family:arial;
					padding:0px;
					color:#111;
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
				<div id="logo1" style="margin-top:160px;">
					<p>Our aim is to make your tummy feel yummy</p>
					<p>Tell us how you feel.</p>
					<form name="myform" id="myform" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" >
						<textarea id="comment" rows="8" cols="40" name="comment"></textarea>
						<div style="width:53%;margin-top:10px;">
							<input type="submit" style="float:right" id="search1" value="Comment"></input>
						</div>
					</form>
					<?php
					$error=null;
					if($_SERVER["REQUEST_METHOD"]=="POST")
					{
						if(!isset($_SESSION["ID"]))
						{
							header('Location:login.php');
						}
						else 
						{
							$comment=$_POST["comment"];
							$email=$_SESSION["ID"];
							$name=$_SESSION["NAME"];
							$query="insert into review values('{$email}','{$comment}','{$name}');";
							
							$rs=mysqli_query($conn,$query);
							echo " ".$rs."<br/>";
							if($rs)
							{
								header('Location:review.php');
							}
						}
					}
					?>
				</div>
			</div>
		</div>
		<div style="text-align:center;padding:1%;" id="aboutus" class="container">
			<h2>Tasty bites</h2>
			<br/>
			<div id="comments">
			<?php
				$query="select * from review";
				//echo $query;
				$rs=mysqli_query($conn,$query);
				//echo " " . $rs;
				while($result=mysqli_fetch_array($rs))
				{
					$output="<p style=\"font-weight:600;font-size:24px;text-align:left\">{$result["name"]}</p>
							 <p style=\"font-size:14px;text-align:left\">{$result["email"]}</p>
							 <p style=\"font-weight:500;font-size:18px;text-align:left\">{$result["comment"]}</p>
							 <hr height\"5px\"/>";
					echo $output;
				}
			?>
			</div>
		</div>
		<!--div id="app" style="text-align:center;padding:25px;">
			<table>
				<tr>
					<td><img src="../images/app.png" height="150px" width="220px"></td>
					<td width="100%"><p id="tag">Download our android app from google play store</p></td>
					<td><img src="../images/qrcode.png" height="100px" width="100px"></br><b>Scan the qrcode to download our app now.</b></td>
				</tr>
			</table>
		</div-->
		<div id="footer">
			<div id="form">
					<p>Sign up for special offers</p>
					<form>
						<input type="email" class="button" name="email" required placeholder="Email"/></br>
						<input type="tel" class="button" name="contact" required placeholder="Contact number"/></br>
						<input style="width:242px;" type="submit" class="button" id="submit" name="submit" value="Send me treat"/>
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
