<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'karya';

$db = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//mysqli_connect_error()
//mysqli_connect_errorno()

if (!$db) {
  echo "koneksi gagal! ".mysqli_connect_error();
  exit();
}

?>