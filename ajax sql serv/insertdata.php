<?php
include_once 'connection.php';




$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO tbl_sample VALUES('$username', '$password')";

if(sqlsrv_query($conn, $query)){
echo 'Success';
}
else {
    echo 'Failed!';
}
?>