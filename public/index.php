<?php
require __DIR__ . '/../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../app/views');
$twig = new \Twig\Environment($loader, [
    'cache' => false
]);
require('../app/controllers/sending.php');
