<?php
// Konfigurasi DB
$host = 'localhost'; 
$dbname = 'dbpuskesmas'; 
$user = 'root'; 
$pass = ''; 

$dsn = "mysql:host=$host;dbname=$dbname";

// Buat koneksi DB
$dbh = new PDO($dsn, $user, $pass);
