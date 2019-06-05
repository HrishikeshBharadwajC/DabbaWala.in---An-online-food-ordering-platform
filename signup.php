<?php include("include.php")?>
<!DOCTYPE html>
<html>
		<head>
			<title>Food-a-Door</title>

			<link rel="stylesheet" type="text/css" href="navbar.css"></link>
			<link rel="stylesheet" type="text/css" href="signform.css"></link>
			<link rel="stylesheet" type="text/css" href="footer.css"></link>
				<script type="text/javascript">
					function validate(){
						var pass1 = document.mform.password1.value;
						var pass2 = document.mform.password2.value;
						if(pass1 != pass2){
							alert("passwords dont match");
							return false;
						}
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
				label{
					color: white;
				}
			</style>
		</head>
		<body>
			<div class="wrap">
				<?php include("navbar.php")?>
				<div class="middlebox">
				<br><br>
						<h1>SignUp</h1>
						<div class="myform">
							<form name="mform" onsubmit="return validate()" method="post">
								<table>
									<tr>
										<td><label for="name">*Name</label></td>
										<td><input type="text" id="name" name="name" placeholder="name" pattern="[A-Za-z]{1,}" required></td>
									</tr>
									<tr>
										<td><label for="username">*Contact Number</label></td>
										<td><input type="text" id="contact" name="contact" placeholder="contact number" pattern="[0-9]{7,10}" required></td>
									</tr>
									<tr class="right" id="invalid-user">
									<td></td>
									</tr>
									<tr>
										<td><label for="e-mail">*E-mail</label></td>
										<td><input type="text" id="e-mail" name="e-mail" placeholder="email" pattern="[A-Za-z0-9]{1,}[@]{1}[A-Za-z0-9]{1,}[.com]{4}" required></td>
									</tr>
									<tr class="right" id="invalid-email">
									<td></td>
									<td>Invalid E-mail address.</td>
									</tr>
									<tr>
										<td><label for="password1">*Password</label></td>
										<td><input type="password"  id="password1" name="password1" placeholder="password" pattern="[A-Za-z0-9]{1,}" required></td>
									</tr>
									<tr class="right" id="password-too">
									<td></td>
									<td>Password too short.</td>
									</tr>
									<tr>
										<td><label for="password2">*Confirm Password</label></td>
										<td><input type="password"  id="password2" name="password2" placeholder="confirm password" pattern="[A-Za-z0-9]{1,}" required></td>
									</tr>
									<tr class="right" id="no-match">
									<td></td>
									</tr>
									<tr>
										<td colspan="3" id="upbutton"><input type="submit" value="Join the food fest" id="signup"></td>
									</tr>
									<tr>
									<td></td>
									</tr>
									<tr>
									<td colspan="2"style="color: white" >* Indicates a required field.</td>
									</tr>
								</table>	
							</form>
							<?php
								$error=null;
							if($_SERVER["REQUEST_METHOD"]=="POST")
							{
								$email=$_POST["e-mail"];
								$pass=$_POST["password1"];
								$name=$_POST["name"];
								$contact=$_POST["contact"];
								$query="insert into userdata values('{$name}','{$contact}','{$email}','{$pass}')";
								//echo $query;
								$rs=mysqli_query($conn,$query);
								if($rs)
								{
									session_start();
									$_SESSION["ID"]=$email;
									$_SESSION["NAME"]=$name;
									//echo $result;
									header('Location:restaurants.php');
								}
								else
								{
									$error="Password doesn't match the given username";
								}
							}
							?>
					</div>
				</div>
			</div>
			<div id="footer"style="position:relative;top:600px;">
			<?php include("footer.php")?>
				<div id="form">
						<p>Sign up for special offers</p>
						<form>
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