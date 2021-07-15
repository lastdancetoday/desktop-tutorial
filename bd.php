<?php
$dbh = new PDO('mysql:dbname=zay;host=localhost', 'root', 'root');
try {
	$dbh = new PDO('mysql:dbname=zay;host=localhost', 'root', 'root');
	$dbh->exec("set names utf8");
} catch (PDOException $e) {
	die($e->getMessage());
}
    ?>  

