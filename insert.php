<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $dob = $_POST['date_of_birth'];
    $institution_name = $_POST['institution_name'];
    $main_topics = $_POST['main_topics'];
    $degree_obtained = $_POST['degree_obtained'];
    $from_year = $_POST['from_year'];
    $to_year = $_POST['to_year'];
    $grades = $_POST['grades'];

    $sql = "INSERT INTO persons (name, surname, gender, email, date_of_birth) VALUES ('$name', '$surname', '$gender', '$email', '$dob')";
    if ($conn->query($sql) === TRUE) {
        $person_id = $conn->insert_id;
        $sql_edu = "INSERT INTO education (person_id, institution_name, main_topics, degree_obtained, from_year, to_year, grades) VALUES ('$person_id', '$institution_name', '$main_topics', '$degree_obtained', '$from_year', '$to_year', '$grades')";
        $conn->query($sql_edu);
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();