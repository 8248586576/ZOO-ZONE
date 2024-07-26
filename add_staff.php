<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $hire_date = $_POST['hire_date'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO staff (name, position, hire_date, salary) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$name, $position, $hire_date, $salary])) {
        echo 'Staff member added successfully.';
    } else {
        echo 'Error: Could not add staff member.';
    }
}
?>

<form method="POST">
    Name: <input type="text" name="name" required><br>
    Position: <input type="text" name="position" required><br>
    Hire Date: <input type="date" name="hire_date" required><br>
    Salary: <input type="number" step="0.01" name="salary" required><br>
    <input type="submit" value="Add Staff">
</form>

