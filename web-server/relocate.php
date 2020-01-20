<?php

	$connection=new mysqli("localhost","root","","id4493440_citypark");
	$_SESSION['rel'] = "";
	$sid = $_POST['sid'];
	$bid = $_POST['bid'];
	$sid = stripcslashes($sid);
	$bid = stripcslashes($bid);
	$sid = mysqli_real_escape_string($connection, $sid);
	$bid = mysqli_real_escape_string($connection, $bid);
	$result = mysqli_query($connection,"UPDATE subadmin SET b_id='$bid' WHERE s_id='$sid'");
	if($result)
			{
				$_SESSION['rel'] = 'Added successfully';
			}
			else
			{
				echo "Error failed to query";
			}	
	header("Location:rel_sa.php");
	
?>