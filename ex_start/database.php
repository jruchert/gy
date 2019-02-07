<?php
    $dsn = 'mysql:host=db;dbname=gy_guitar_shop';
    $username = 'gyera';
    $password = 'password';
    
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include 'database_error.php';
        exit();
    }
