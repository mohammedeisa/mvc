<?php
/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 4/29/2018
 * Time: 9:55 PM
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'mvc',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',

]);

$capsule->bootEloquent();