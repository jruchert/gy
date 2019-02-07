<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$user_name = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
// Validate inputs
if ($user_name == null || $password == null) {
    $error = "Invalid username or password. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');
    $loginQuery = 'SELECT * FROM users WHERE username = :user_name';
    $loginStatement = $db->prepare($loginQuery);
    $loginStatement->bindValue(':user_name', $user_name);
    $loginStatement->execute();
    $rows = $loginStatement->rowCount(); 
    if ($rows >= 1) {
        $error = "That user name already exists!";
        include('error.php');
    } else {
        $query = 'INSERT INTO users (username, password) VALUES(:user_name, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_name', $user_name);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
        header('Location: index.php');
    }
}
?>