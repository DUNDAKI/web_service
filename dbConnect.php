<?php
//host localhost
//user root
//pass vertrigo
//db db_curso_udemy

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'vertrigo');
define('DB', 'db_curso_udemy');

$charset = 'utf8';
$conn = mysqli_connect(HOST, USER, PASS, DB)
        or die('falhou...');

?>