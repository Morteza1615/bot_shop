<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule  = new  Capsule();
$capsule->addConnection([
    "dirver" => "mysql",
    "host" => "localhost",
    "database" => "shop",
    "username" => "root",
    "password" => "",
    "charset" => "utf8",
    "collation" => "utf8_general_ci",
    "prefix" => ""
]);