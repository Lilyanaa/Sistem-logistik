<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'db_logistik';
$databaseUsername = 'root';
$databasePassword = '';

$koneksi= mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die (mysqli_error()); 

?>