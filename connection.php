<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'get_post';

$connection = mysqli_connect($server, $username, $password, $db_name);

if(!$connection){
    echo "does not connect to the database";
}
?>