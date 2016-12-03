<?php
header('Content-Type: application/json');
include 'conn.php';
$emailid = $_REQUEST['email'];
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$password = $_REQUEST['password'];
$sql = "insert into users (email, password, first_name, last_name) values ('$emailid','$password', '$first_name','$last_name')";
if (mysqli_query($connect, $sql)) {

           $user_id =mysqli_insert_id($connect);
           echo json_encode(array('userid' => $user_id));

        }else{
            echo json_encode(array('result' => 'false'));
        }

        $connect->close();
?>