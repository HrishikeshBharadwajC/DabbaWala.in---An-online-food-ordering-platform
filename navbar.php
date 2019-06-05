<?php if(!isset($_SESSION["ID"]))
			{
				echo '
				<div class="navwrap" style = "background:#A4A4A7;">
					<nav id="navi-bar">
						<div class="nav-left">
						<ul>
							<li><a href="review.php">Review</a></li>
							<li><a href="restaurants.php">Order</a></li>
							<li><a href="homepage.php">Home</a></li>
						</ul>
						</div>
						<a href="homepage.php"><img  id="logo" src="dbin.JPG" width="250px" height="71.76px"/></a>
						<div class="nav-right">	
						<ul>
							<li><a href="about.php">About us</a></li>
							<li><a href="signup.php">Sign up</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
						</div>
					</nav>
				</div>';
			 }
			else{
				echo '
					<div class="navwrap" style = "background:#A4A4A7; color:black;">
						<nav id="navi-bar">
							<div class="nav-left">
							<ul>
								<li><a href="review.php">Review</a></li>
								<li><a href="restaurants.php">Order</a></li>
								<li><a href="homepage.php">Home</a></li>
							</ul>
							</div>
							<a href="homepage.php"><img  id="logo" src="dbin.JPG" width="250px" height="71.76px"/></a>
							<div class="nav-right">	
							<ul>
								<li><a href="about.php">About Us</a></li>';
								
								echo "<li id=\"hey\"><a href=\"#\">Hi {$_SESSION["NAME"]}</a>
										<ul style=\"clear:both;\" id=\"options\">
											<li style=\"clear:both;margin-top:0px;\"><a href=\"change.php\">Change password</a></li>
											<li style=\"clear:both;margin-top:-30px;\"><a href=\"logout.php\">Logout</a></li>
											
										</ul>
								</li>";
								echo '
							</ul>
							</div>
						</nav>
					</div>';
			}?>