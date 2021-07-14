<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'register1');

$con = mysqli_connect(HOST,USER,PASS,DB) or die ('unbale to connect');