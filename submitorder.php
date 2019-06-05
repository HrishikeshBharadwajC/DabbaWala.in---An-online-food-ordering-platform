<?php 
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
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="submitorder.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<script type="text/javascript">
		function redirect_homepage()
		{
			document.location = "homepage.php";
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
				#waris>tr>td{
					padding: 5px;
				}
				#options li>a{
					margin-left:0px;
					text-align:left;
				}
				.button{

					border: none;
				    color: white;
				    padding: 15px 32px;
				    text-align: center;
				    text-decoration: none;
				    display: inline-block;
				    font-size: 16px;
				    margin: 4px 2px;
				    cursor: pointer;
				    background: rgba(0,0,0,0.5);
				}
				.button:hover{
					background: rgba(255,255,255,0.7);
				}
			</style>
</head>
<body>
			<?php include("navbar.php")?>
			<div class="wrap">
			<div id="box">
				<?php echo "<br/><b>Your order is</b>
				<br/>
				<table id=\"waris\"><tr><th>Item</th><th>Quantity</th><th>Amount</th></tr>";
				$restaurant = $_REQUEST["rest"];
				$conn = mysqli_connect("localhost","root","","dabba");
				$query = "select * from items where restaurant = '$restaurant';";
				$item = array(0,0,0,0,0);
				$result = mysqli_query($conn,$query);
				$i=0;
				$amount=0;
					while ($show = mysqli_fetch_array($result)){

							$item[$i]=$_POST["item".$i];
							if($item[$i]>0)
							{
							echo "<tr><td>" . $show["item"]."</td><td>".$item[$i]."</td><td>" . $item[$i]*$show["price"]."</td></tr>";
							$amnt=$item[$i]*$show["price"];
							$sql = "insert into orders values('{$_SESSION["ID"]}','{$restaurant}','{$show["item"]}',{$item[$i]},{$amnt});";
							mysqli_query($conn,$sql);
							$amount+=$item[$i]*$show["price"];
							}
							$i++;
							//echo $_POST["item".$i++];
							}
						echo "<tr><th colspan=\"2\">Total amount</th><th>".$amount."</th></tr></table>";
							//print_r($item);
				?>
			<br>
			<br>
			<form action="homepage.php">

				<b>Please enter the delivery address</b><br>
				<label>Address to send to:</label><br>
				<textarea name="address" cols = "40" rows = "5" align="center"></textarea>
				
			</form>

			<form id="myform" method="post" action="homepage.php">
				<label>Mailing address:</label>
				<input type="text" name="to_mail" value=<?php echo "{$_SESSION["ID"]}";?> />
				<br><br>
				<button class="button">
				Place order
				</button>
			</form>
			<button class = "button"><a href="homepage.php" style="color: white; text-decoration: none;">Go back to ordering..</a></button>
			<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

			<script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.2.4/email.min.js"></script>
			<script type="text/javascript">
			   (function(){
			      emailjs.init("user_6tr62XqMgepV9zUpuhuJV");
			   })();
			</script>
			<script type="text/javascript">
				var myform = $("form#myform");
				myform.submit(function(event){
					event.preventDefault();

				  // Change to your service ID, or keep using the default service
				  var service_id = "default_service";
				  var template_id = "template_lt7MCCDO";

				  myform.find("button").text("Sending...");
				  emailjs.sendForm(service_id,template_id,myform[0])
				  	.then(function(){ 
				    	alert("Sent!");
				       myform.find("button").text("Send");
				   	}, function(err) {
				       alert("Send email failed!\r\n Response:\n " + JSON.stringify(err));
				       myform.find("button").text("Send");
				    });
				  return false;
				});
			</script>
			</div>
			
			</div>


				<div id="footer" style="position:absolute;top:755px;left:0px;">
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
</body>
</html>