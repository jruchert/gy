<?php
require 'database.php';
$query = 'SELECT *
FROM users';
$statement = $db->prepare($query);
$statement->execute();
$users = $statement->fetchAll();
$statement->closeCursor();
// $result = $statement->fetchAll(PDO::FETCH_CLASS, "user_name");
echo "Exisiting Users <br>";
            foreach ($user_names as $value) {
              echo $value["user_name"] . "<br>";
              }
?>
<!DOCTYPE html>
<html>
    <title>Login
    </title>
    <h1>Winning!
    </h1>
    <h3>This will be beautiful in the future
    </h3>
    <h3>It's 3:30am
    </h3>
</html>
