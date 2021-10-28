<?php
$host = 'db';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';

$_db = new mysqli($host, $user, $pass);
if ($_db->connect_error) {
    die("Connection failed: " . $_db->connect_error);
} else {
//    echo "Connected to MySQL server successfully!\n";
    mysqli_select_db($_db, 'MYSQL_DATABASE');
//    $_db->query("INSERT INTO `user` (`U_ID`, `U_NAME`, `U_CLASS`, `U_HP`, `U_ATTACK`, `U_DEFENSE`) VALUES (NULL, 'pop', '2', '50', '99', '78');" );
//    foreach ($_db->query('SELECT * FROM user') as $item) {
//        var_dump($item);
//    }
}

?>