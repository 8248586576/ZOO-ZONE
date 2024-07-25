<?php
include 'db.php';

$enclosure_id = $_GET['enclosure_id'];

$sql = "SELECT * FROM animals WHERE enclosure_id = $enclosure_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Species: " . $row["species"]. " - Age: " . $row["age"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
