<?php
header('Content-Type: application/json');
include 'conn.php';
$sql = "select * from location" ;
if($recordSet=mysqli_query($connect,$sql))
{
    while($record = mysqli_fetch_array($recordSet,MYSQLI_ASSOC)){
        $route=$record['route_id'];
        $lati = $record['lati'];
        $logi=$record['logi'];
        echo json_encode(array('route_id'=>$route,'lati'=>$lati,'logi'=>$logi));
    }
}
?>