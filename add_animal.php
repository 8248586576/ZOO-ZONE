<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $species = $_POST['species'];
    $age = $_POST['age'];
    $habitat = $_POST['habitat'];
    $arrival_date = $_POST['arrival_date'];
    $health_status = $_POST['health_status'];

    $sql = "INSERT INTO animals (name, species, age, habitat, arrival_date, health_status) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$name, $species, $age, $habitat, $arrival_date, $health_status])) {
        echo 'Animal added successfully.';
    } else {
        echo 'Error: Could not add animal.';
    }
}
?>

<form method="POST">
    Name: <input type="text" name="name" required><br>
    Species: <input type="text" name="species" required><br>
    Age: <input type="number" name="age" required><br>
    Habitat: <input type="text" name="habitat" required><br>
    Arrival Date: <input type="date" name="arrival_date" required><br>
    Health Status:
    <select name="health_status" required>
        <option value="healthy">Healthy</option>
        <option value="sick">Sick</option>
        <option value="under treatment">Under Treatment</option>
    </select><br>
    <input type="submit" value="Add Animal">
</form>
