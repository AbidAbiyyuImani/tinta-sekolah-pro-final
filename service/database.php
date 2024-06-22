<?php

$hostname = 'localhost';
$username = 'root';
// $username = 'tintasek_user';
$password = '';
// $password = 'rootTintaSekolah';
$database = 'tintasek_tintasekolah';
$port = 3306;

$db = mysqli_connect($hostname, $username, $password, $database, $port);

if ($db->connect_error) {
    echo "Database Connection Failed <br>" . mysqli_connect_error();
    die($db);
}

?>