<?php
include 'pro2.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $species = $_POST["species"];
    $age = $_POST["age"];
    $enclosure_id = $_POST["enclosure_id"];

    $sql = "INSERT INTO animals (name, species, age, enclosure_id) 
            VALUES ('$name', '$species', $age, $enclosure_id)";

    if ($conn->query($sql) === TRUE) {
        echo "Animal added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
