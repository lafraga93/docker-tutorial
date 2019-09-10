<?php

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=database', 'root', '12345');
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

var_dump($pdo);
