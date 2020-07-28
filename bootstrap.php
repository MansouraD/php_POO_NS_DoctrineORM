<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";


$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/entities/"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);


$conn = array(

    'dbname' => 'ormBase',
    'user' => 'root',
    'password' => '',
    'host' => '127.0.0.1',
    'driver' => 'pdo_mysql',
);


$entityManager = EntityManager::create($conn, $config);