<?php
header('Content-Type: application/json');
include 'conn.php';
$emailid = $_REQUEST['email'];
$password = $_REQUEST['password'];
$sql = "select * from users where email = '$emailid' and password = '$password'";
if ($recordSet = mysqli_query($connect, $sql)) {
    	$row_count = mysqli_num_rows($recordSet);
        if ($row_count != 0)
        {
            $sql1 = "select userid,email,first_name,last_name from users where email = '$emailid' and password = '$password'";    
            if ($recordSet = mysqli_query($connect, $sql)) {
                $record = mysqli_fetch_array($recordSet,MYSQLI_ASSOC);
                    echo json_encode(array('email'=>$record['email'],'first_name'=>$record['first_name'],'last_name'=>$record['last_name'])); 
            }
        }
    else        
    {
                    echo json_encode(array('user does not exist'=>'user doesnt exist')); 
    }
}
    $connect->close();
?>