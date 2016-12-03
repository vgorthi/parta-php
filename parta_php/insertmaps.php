
<?php
header('Content-Type: application/json');
include 'conn.php';
    $user_id=$_REQUEST['user_id'];
    $route_id=$_REQUEST['route_id'];
	$lat=$_REQUEST['latitude'];
	$lon=$_REQUEST['longi'];
	$sql = "select user_id from location where user_id=$user_id";
	$recordSet=mysqli_query($connect,$sql);
	$row_count = mysqli_num_rows($recordSet);
	if ($row_count===0){
	$mysql="INSERT INTO location (user_id,route_id,lati,logi) VALUES ('$user_id','$route_id','$lat','$lon')"; 
	if(mysqli_query($connect,$mysql))
	{
		echo json_encode(array('result'=>'true'));
	}else{
		echo json_encode(array('result'=>'false'));
	}}
	else{
	$mysql_update = "update location set route_id=$route_id,lati=$lat,logi=$lon where user_id=$user_id";
	if(mysqli_query($connect,$mysql_update))
	{
		echo json_encode(array('result'=>'true'));
	}else{
		echo json_encode(array('result'=>'false'));
	}}

?>