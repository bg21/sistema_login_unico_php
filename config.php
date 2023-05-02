<?php
try {
	$pdo = new PDO("mysql:dbname=projeto_loginunico;host=localhost", "root", "root");
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}