<?php

require_once '../Model/Portfolio.php';
require_once '../View/portfolio.php';
require_once '../Model/dataAccess.php';

if (!isset($_SESSION)) {
    session_start();
}

$results = getAllPortfolio();

?>