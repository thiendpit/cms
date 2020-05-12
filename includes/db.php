<?php 

$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'cms';

// Connect to database
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
if(!$conn) {
    die("Connect to database failed " . mysqli_error($conn));
}
?>