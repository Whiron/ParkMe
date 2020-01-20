<?php 
	session_start();
	$_SESSION['book'] = "";
	// Get values pass from form in login.php file
	$num_plate = $_POST['no_plate'];
	$phone = $_POST['phone'];
	$start_time = $_POST['start_time'];
	$end_time = $_POST['end_time'];
	$s_id = $_SESSION['s_id'];
	$_SESSION['start_time'] = $start_time;
	$_SESSION['end_time'] = $end_time;
	$_SESSION['qrcode'] = "";
	$b_id = "";
	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "id4493440_citypark");
	$result1 = mysqli_query($con ,"SELECT * from subadmin where s_id = '$s_id'") or die("Failed to query database1".mysql_error());
	$row = mysqli_fetch_array( $result1);
	if(is_array($row)) {
		//$_SESSION["u_id"] = $row['u_id'];
		$b_id = $row['b_id'];
	}
	//echo $b_id;
	//$rs_id=$_SESSION['s_id'];
	// CHart Type
	$cht = "qr";
	// CHart Size
	$chs = "150x150";
	// CHart Link
	$chl = $phone.$start_time.$b_id;
	// CHart Output Encoding (optional)
	// default: UTF-8
	$choe = "UTF-8";
	$qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $chs . '&chl=' . $chl . '&choe=' . $choe;
	$result = mysqli_query($con ,"INSERT INTO slot_tbl(email,startT,endT,build,qr_code) VALUES('$phone','$start_time','$end_time',$b_id,'$chl')") or die("Failed to query database2".mysql_error());
	$_SESSION['qrcode']=$qrcode;
	header("Location:book_sa.php");
?>
