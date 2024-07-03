<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql_person = "SELECT * FROM persons WHERE id='$id'";
    $result_person = $conn->query($sql_person);

    if ($result_person->num_rows > 0) {
        $row_person = $result_person->fetch_assoc();

        $sql_edu = "SELECT * FROM education WHERE person_id='$id'";
        $result_edu = $conn->query($sql_edu);
        $row_edu = ($result_edu->num_rows > 0) ? $result_edu->fetch_assoc() : [];

        $combined_row = array_merge($row_person, $row_edu);

        echo json_encode($combined_row);
    } else {
        echo "Record not found";
    }
}
$conn->close();
