<?php
require_once 'vendor/autoload.php';

// Pouzite Medoo na komunikaciu
use Medoo\Medoo;

// Initialize
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'michal', //databaza 
    'server' => 'localhost',
    'username' => 'Michal', //prihlasovacie meno
    'password' => 'michal', //heslo
    'charset' => 'utf8'
]);

//URL bude treba prisposobit
$site_url = 'http://localhost:5500/php/zadanie';
