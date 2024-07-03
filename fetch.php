<?php
include 'db.php';

$sql = "SELECT p.id, p.surname, p.name, p.date_of_birth, YEAR(CURDATE()) - YEAR(p.date_of_birth) AS age FROM persons p ORDER BY p.surname";
$result = $conn->query($sql);

$persons = [];
while ($row = $result->fetch_assoc()) {
    $persons[] = $row;
}

echo json_encode($persons);
$conn->close();
