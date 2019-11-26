<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$array = [__DIR__."/src"];
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration($array, $isDevMode);
$configConn = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    'dbname' => 'blog',
    'user' => 'blog',
    'password' => 'blog',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
);


$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $configConn);
$entityManager = EntityManager::create($conn, $config);