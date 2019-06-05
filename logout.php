<?php
	session_start();
?>

<?php
	$count=6;
	while($count)
	{
		echo "You have been logged out. You will be directed to homepage in ".$count." seconds";
		sleep(1);
		$count--;
	}
	session_destroy();
	header('Location:homepage.php');
?>