<?php
$pdo = new PDO('mysql:dbname=testDB;host=mysql', 'test', 'horriblepassword', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];
