<?php

$pdo = new PDO("mysql:host=localhost;dbname=graces_portfolio", "root","",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

session_start();

function getAllPortfolio() {
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Portfolio ORDER BY RAND()");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Portfolio");
    return $results;
}

?>