<?php
require './components/header.php';
require './configurations/database.php';
echo "<h1>List of feedbacks here</h1>";

$sql = "SELECT name, email,body FROM feedback;";
$connection = getConnection();
if ($connection != null) {
    try {
        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        $feedbacks = $statement->fetchAll();
        echo '<ul class="list-group">';
        foreach ($feedbacks as $feedback) {
            $name = $feedback['name'] ?? '';
            $email = $feedback['email'] ?? '';
            $body = $feedback['body'] ?? '';
            echo '<li class="list-group-item">';
            echo "<p>$name</p>";
            echo "<p>$email</p>";
            echo "<p>$body</p>";
            echo '</li>';
            //echo "$name, $email, $body<br>";
        }
        echo '</ul>';
    } catch (PDOException $e) {
        echo "Cannot query data. Error: ".$e->getMessage();
    }
}
include './components/footer.php';
