<?php
$dsn = '';
$user = '';
$password = '';

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    print("<b>Data base connection error:</b>" . $e->getMessage());
    die();
}
