<?php
$server = 'localhost';
$username='root';
$password='';
$db='PartaApp';
$connect=@mysqli_connect($server,$username,$password,$db);
if(!$connect){
exit('error');
}
?>