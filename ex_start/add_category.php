<?php
declare(strict_types=1);
$name = filter_input(INPUT_POST, 'name');
if (null === $name) {
    $error = 'Invalid category name. Check input and try again.';
    include 'error.php';
} else {
    require_once 'database.php';
    $query = <<<'SQL'
INSERT INTO my_guitar_shop1.categories
    (categoryName)
    VALUES
    (:name)
SQL;
    /** @var PDOStatement $statement */
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
    include 'category_list.php';
}
