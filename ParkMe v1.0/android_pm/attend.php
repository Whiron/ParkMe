<?php
/* include 'DatabaseConfig.php';
$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
echo "hello";
$qry="update 1test set atd='NUll' where en_no='150320107011'";
$sql1=mysqli_query($con,$qry);

mysqli_close($con);*/
include 'DatabaseConfig.php';

 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 $id = $_POST['id'];
 $mail= $_POST['mail'];
   
 
 $Sql_Query = "select * from 1test where en_no = $id";
 
 $check = mysqli_fetch_array(mysqli_query($con,$Sql_Query));
 
 if(isset($check)){
 
// $qry="update 1test set atd='P' where en_no=$id";
 $qry="update 1test set atd='P' , mail='".$mail."' where en_no='".$id."'";
 mysqli_query($con,$qry);
 echo "Ok";
 
 }
 else{
 echo "KO";
 }
 
 }else{
 echo "hut";
 }
mysqli_close($con);

?>