<?php
	session_start();
	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ghost");
	$start_time = $_SESSION['start_time'];
	$end_time = $_SESSION['end_time'];
	$build = $_POST['build'];
	$b_id=0;
	$capacity=0;
	$floors=0;
	$zones=0;
	$result = mysqli_query($con ,"SELECT * from building where build = '$build'") or die("Failed to query database1".mysql_error());
	$row = mysqli_fetch_array( $result);
	if(is_array($row)) {
		//$_SESSION["u_id"] = $row['u_id'];
		$b_id = $row['b_id'];
		$capacity = $row['capacity'];
		$floors = $row['floors'];
		$zones = $row['zones'];
	}
	$floor_cap=$capacity/$floors;
	$zone_per_floor=$zones/$floors;
	$zone_cap=$floor_cap/$zone_per_floor;
	//temp variables
	$result = mysqli_query($con ,"SELECT * from transaction") or die("Failed to query database1".mysql_error());
	$row = mysqli_fetch_array( $result);
	if(mysqli_num_rows($row)!=0) {
		//$_SESSION["u_id"] = $row['u_id'];
		$p_id = $row['p_id'];
		$idk=array();
		$idk=str_split($p_id,2);
		$chk_b_id=$idk[0];
		$chk_floor=$idk[1];
		$chk_zone=$idk[2];
		$chk_slot=$idk[3];
		
		if($chk_floor<$floors){
			$chk_floor++;
			if($chk_zone<$zone_per_floor){
				$chk_zone++;
				if($chk_slot<$zone_cap){
					$chk_slot++;
					$new_p_id=$b_id.$chk_floor.$chk_zone.$chk_slot;
				}
				else{
					echo "Parking Full !"
				}
			}
			
		}
	}
	else
	{
		$p_id=$b_id.'01'.'01'.'01';
	}
	
//		$min = $start_time;
//		$sql = 'SELECT end_time from transaction';
//		$data = mysqli_query($con,$sql);
//		if(mysqli_num_rows($data)>0)
//		{
//			while($row = mysqli_fetch_assoc($data))
//			{
//				
//			}
//		}
		

?>





