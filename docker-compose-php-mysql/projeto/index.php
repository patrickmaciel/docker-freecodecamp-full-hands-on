<?php

// Host name need to be the host name of the service in docker-compose.yml
$dbh = new PDO('mysql:host=db;dbname=projeto', 'root', 'root');

$sth = $dbh->query('SELECT * FROM users');

echo '<pre>';
foreach ($sth as $row) {
    print_r($row);
}
