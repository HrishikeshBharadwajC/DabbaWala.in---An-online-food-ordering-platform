<?php
					$error=null;
				if($_SERVER["REQUEST_METHOD"]=="POST")
				{
					$email=$_POST["email"];
					$number=$_POST["number"];
					$query = "insert into offer values (\"{$email}\",\"{$number}\")";
					$result=mysqli_query($conn,$query);
					if($result)
					{
						echo "request entered";
					}
					else
					{
						$error="Cant Submit";
					}
				}
				?>