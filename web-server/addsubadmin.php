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
	$fname = test_input($_POST['first-name']);
	$lname = test_input($_POST['last-name']);
	$password = $fname.$lname;
	$b_id = test_input($_POST['b_id']);
	$phone = test_input($_POST['phone']);
	$gender= test_input($_POST['gender']);
	$email = test_input($_POST['e-mail']);

	
		$sql="INSERT INTO subadmin(b_id,first_name,last_name,gender,email,password,contact) VALUES($b_id , '$fname', '$lname', '$gender', '$email','$password', $phone)";
		echo $sql;
		$query=mysqli_query($con,$sql);
			if($query)
			{
				//$_SESSION["u_id"] = $u_id;
				//$_SESSION["s_id"] = $sid;
				//$roomsql=mysqli_query($con ,"INSERT INTO roomalloc (sid,room,name,branch)VALUES ('$sid', '$room', '$name','$branch' )");
				//$roomsql=mysqli_query($con ,"INSERT INTO fees (sid,room,receipt)VALUES ('$sid', '$room', '$reciept_no')");
				header("Location:add_sa.php");
				$_SESSION['msg'] = 'Added successfully';
			}
			else
			{
				echo "Error failed to query";
				//header("Location:signup1.php");
			}	
	
?>