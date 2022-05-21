<?php
$user = 'root';
<<<<<<< HEAD
$pass = '';
=======
$pass = '12345';
>>>>>>> 6261026ca50e34c392b37e7f64b9888b3cfef183
$host = 'localhost';
$db = 'bookstore';


$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" .
        $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
