<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 08/09/2018
 * Time: 12:12
 */

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'student management system';

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$connection) {
    die("Error: Problem connecting to db, " . mysqli_error($connection));
}