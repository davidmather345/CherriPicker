<?php
/* Database connection settings */
$host = '127.0.0.1';
$user = 'x14322731';
$pass = '';
$db = 'cherrypickerdb';

$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);