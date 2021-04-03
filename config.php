<?php
session_start();
$dbHost = 'localhost';
$dbName = 'Login';
$dbUsername = 'root';
$dbPassword = '';
$dbc=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
?>