<?php include("include.php")?>
<!DOCTYPE html>
<html>
		<head>
			<title>Login</title>

			<link rel="stylesheet" type="text/css" href="navbar.css"></link>
			<link rel="stylesheet" type="text/css" href="signform.css"></link>
			<link rel="stylesheet" type="text/css" href="footer.css"></link>
				<style type="text/css">
				body {
					background-image: url("food/bruschetta.jpg");
				}
				.middlebox {
					top: 30%;
				}
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
				<script type="text/javascript">
					function validate() {
					var pass_exp = /^[a-zA-Z0-9!@$%^*]{8,20}$/;
					var emai_exp = /^[A-Za-z0-9.]{1,}[@]{1}[A-Za-z0-9.]{1,}[.A-Za-z0-9]{4}$/;
					var usename = document.forms["mform"]["username"];
					var pass = document.forms["mform"]["password1"];
					var emails = document.forms["mform"]["e-mail"];
					if(usename.value == null || usename.value == "")
					{
					alert("enter the username");
					}
					if(pass.value == null || pass.value == "")
					{
					alert("enter the password");
					}
					if(emails.value == null || emails.value == "")
					{
					alert("enter the email address");
					}
					if(!emai_exp.test(emails.value))
					{
						alert("wrong email format");	
					}
					if(!pass_exp.test(pass.value))
					{
					alert("password incorrect or short(should contain only 6-16 characters)");
					}

					}
				</script>
		</head>
		<body>
			<div class="wrap">
		<!--	<div class="navwrap">
					<nav id="navi-bar">
						<div class="nav-left">
						<ul>
							<li><a href="review.php">Review</a></li>
							<li><a href="restaurants.php">Order</a></li>
							<li><a href="homepage.php">Home</a></li>
						</ul>
						</div>
						<a href="homepage.php"><img src="restaurants lists/fooddoorlogo.png" width="250px" height="71.76px"/></a>
						<div class="nav-right">	
						<ul>
							<li><a href="about.php">About Us</a></li>
							<li><a href="signup.php">Sign Up</a></li>
							<li><a href="#">Login</a></li>
						</ul>
						</div>
					</nav>
				</div> -->
			<!--	<div id="rect">	-->
					<?php include("navbar.php");?>
				<?php
					$error=null;
				if($_SERVER["REQUEST_METHOD"]=="POST")
				{
					$username=$_POST["e-mail"];
					$pass=$_POST["password1"];
					$query="select * from userdata where email='{$username}' and password='{$pass}';";
					echo $query;
					$rs=mysqli_query($conn,$query);
					if($result=mysqli_fetch_array($rs))
					{
						session_start();
						$_SESSION["ID"]=$username;
						$_SESSION["NAME"]=$result["name"];
						//echo $result;
						header('Location:restaurants.php');
					}
					else
					{
						$error="Password doesn't match the given username";
					}
				}
				?>
				<div class="middlebox">
				<br><br>
						<h1>LogIn</h1>
						<?php echo "<br/>".$error;?>
						<div id="myform">
						<form name="mform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" onsubmit="return validate()">
							<table>
							<!--	<tr>
									<td><label for="username">*Username</label></td>
									<td><input type="text" id="username" name="username" placeholder="username"></td>
								</tr> -->
								<tr>
									<td><label style="color: white"for="e-mail">*E-mail</label></td>
									<td><input type="text" id="e-mail" name="e-mail" required placeholder="email"></td>
								</tr>
								<tr>
									<td><label style="color: white" for="password1">*Password</label></td>
									<td><input type="password"  id="password1" name="password1" required placeholder="password"></td>
								</tr>
								<tr>
									<td colspan="2" id="upbutton"><input type="submit" value="Take me in" id="signup"></td>
								</tr>
								<tr>
								<td></td>
								</tr>
								<tr>
								<td colspan="2" style="color: white" >*required field.</td>
								</tr>
							</table>	
				</form>
			<p class="textt"><a href="">Forgot your password?</a></p>
			<p class="textt"><a href="signup.php">SignUp</a></p>
				</div>
			</div>

		</div>
		<div id="footer"style="position:relative;top:600px;">
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
		</body>
</html>


<!--aarthy.sl@outlook.com--> 