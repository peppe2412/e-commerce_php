<?php

require __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->load();

$dbServer = $_ENV['DB_SERVER'];
$dbUsername = $_ENV['DB_USERNAME'];
$dbPassword = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];

$connect = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

if(!$connect){
    error_log('Connessione fallita: ' . mysqli_connect_error());
}