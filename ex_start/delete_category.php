<?php
declare(strict_types=1);
// Get ID
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
// Delete the product from the database
if (false !== $category_id) {
    require_once 'database.php';
    $query = <<<'SQL'
DELETE FROM my_guitar_shop1.categories
    WHERE categoryID = :category_id
SQL;
    /** @var PDOStatement $statement */
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $success = $statement->execute();
    $statement->closeCursor();
}
// Display the Product List page
include 'category_list.php';
