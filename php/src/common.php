<?php
$host = 'db';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';

$_db = new mysqli($host, $user, $pass);
if ($_db->connect_error) {
    die("Connection failed: " . $_db->connect_error);
} else {
    mysqli_select_db($_db, 'MYSQL_DATABASE');
}

?>