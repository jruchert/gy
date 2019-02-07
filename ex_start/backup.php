
<?php
declare(strict_types=1);
$loginAddID = filter_input(INPUT_POST, 'name');
if (null === $loginAddID) {
    $error = 'Invalid entry. Check input and try again.';
    include 'error.php';
} else {
    require_once 'database.php';
    $query = <<<'SQL'
INSERT INTO gy_guitar_shop.users
(loginAddID)
VALUES
(:name)
SQL;
    /** @var PDOStatement $statement */
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
    include 'login.php';

?>
<h1>
Add User
</h1>

<input type="text" name="loginAddUser">
<input type="submit" value="Add User">
