<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type='text/css' rel='stylesheet' href='../bootstrap.css'>
    <title>Document</title>
</head>
<nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
    <div class="container-fluid">
        <span class="navbar-brand">Atelier 5</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/ex1/main.php">Ex1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ex2/main.php">Ex2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ex3/main.php">Ex3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ex4/main.php">Ex4</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php

require_once('Adulte.php');
require_once('Adolescent.php');

$adulte1 = new Adulte("Ksouri", "Lamys", "Actor", 30000);
$adolescent1 = new Adolescent("Ksouri", "Nour", 18, "Drawing");

echo $adulte1->__getInfo() . '<br>';
echo $adolescent1->__getInfo() . '<br>';

?>