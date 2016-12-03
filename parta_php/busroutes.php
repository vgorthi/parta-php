<?php
include 'conn.php';
$sql = "select * from routes";
$recordSet = mysqli_query($connect,$sql);
while($record = mysqli_fetch_array($recordSet,MYSQLI_ASSOC)){
    echo json_encode(array('route_id'=>$record['route_id'],'route_name'=>$record['route_name']));
}
?>