<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $visit_date = $_POST['visit_date'];
    $ticket_number = $_POST['ticket_number'];

    $sql = "INSERT INTO visitors (name, visit_date, ticket_number) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$name, $visit_date, $ticket_number])) {
        echo 'Visitor added successfully.';
    } else {
        echo 'Error: Could not add visitor.';
    }
}
?>

<form method="POST">
    Name: <input type="text" name="name" required><br>
    Visit Date: <input type="date" name="visit_date" required><br>
    Ticket Number: <input type="text" name="ticket_number" required><br>
    <input type="submit" value="Add Visitor">
</form>
