<?php
$config = require 'config.php';

$conn = new mysqli(
  $config['host'],
  $config['user'],
  $config['pass'],
  $config['name']
);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}