<?php
	session_start();
	$con =new mysqli("localhost", "root", "","id4493440_citypark");
	//mysqli_select_db($con, 'parking');

	if($con)
		echo 'connected successfully to mydb database';
	$_SESSION['msg'] = "";
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	//$reg_no = test_input($_POST['reg']);
	//$password = test_input($_POST['password']);
	if(isset($_POST['add']))
	{
		$name = test_input($_POST['name']);
	$capacity= test_input($_POST['capacity']);
	
		$sql="INSERT INTO building(build,capacity) VALUES('$name' , '$capacity')";
		echo $sql;
		$query=mysqli_query($con,$sql);
			if($query)
			{
				header("Location:build.php");
				$_SESSION['msg'] = 'Added successfully';
			}
			else
			{
				echo "Error failed to query";
			}	
	}
	if(isset($_POST['delete']))
	{
		$build = test_input($_POST['build']);
		$sql="DELETE FROM building WHERE build = '$build'";
		$query=mysqli_query($con,$sql);
		header("Location:build.php");
		
	}
	
	
?>