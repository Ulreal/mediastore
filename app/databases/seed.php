<?php
namespace app\databases;

use app\config\Config;
use app\config\Database;
use app\databases\seeds\Article;
use app\databases\seeds\User;
use app\databases\seeds\Contient;
use app\databases\seeds\stock;

require_once 'vendor/autoload.php';

// configuration du mode debug
ini_set('display_errors', Config::get('debug'));

// configuration de la timezone
date_default_timezone_set(Config::get('timezone'));

// Configuration de  l'orm
Database::init(Config::get('database'));

$tables = [];

$tables[] = new User();
$tables[] = new Article();

foreach ($tables as $table) {
    $table->run();
}

