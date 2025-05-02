<?php
$mysqli = new mysqli(
  getenv('DB_HOST'), 
  getenv('DB_USER'), 
  getenv('DB_PASSWORD'), 
  getenv('DB_NAME')
);

if ($mysqli->connect_error) {
  die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
echo 'Connected successfully to MySQL ' . $mysqli->host_info;
$mysqli->close();
