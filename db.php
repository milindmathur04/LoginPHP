<?php
/* Database connection settings */
$host = 'AdSkipper.mysql.pythonanywhere-services.com';
$user = 'AdSkipper';
$pass = 'cozad123';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
