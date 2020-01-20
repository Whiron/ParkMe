<?php
$start_time=$resu['startT'];
$end_time=$resu['endT'];
$build=$resu['build'];
$contact=$id;

$qry1="select b_id from building where build='$build'";
$pres1=mysqli_query($con,$qry1);
$res1= mysqli_fetch_array($pres1);

$qry2="insert into transaction(t_id,p_id,) values('','".$res1['b_id']."')";
$pres2=mysqli_query($con,$qry2);
?>