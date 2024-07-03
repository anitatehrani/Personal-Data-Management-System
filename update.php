<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['editid'];
    $name = $_POST['editname'];
    $surname = $_POST['editsurname'];
    $gender = $_POST['editgender'];
    $email = $_POST['editemail'];
    $dob = $_POST['editdate_of_birth'];
    $institution_name = $_POST['editinstitution_name'];
    $main_topics = $_POST['editmain_topics'];
    $degree_obtained = $_POST['editdegree_obtained'];
    $from_year = $_POST['editfrom_year'];
    $to_year = $_POST['editto_year'];
    $grades = $_POST['editgrades'];

    $sql_person = "UPDATE persons SET name='$name', surname='$surname', gender='$gender', email='$email', date_of_birth='$dob' WHERE id='$id'";
    $conn->query($sql_person);

    $sql_edu = "UPDATE education SET institution_name='$institution_name', main_topics='$main_topics', degree_obtained='$degree_obtained', from_year='$from_year', to_year='$to_year', grades='$grades' WHERE person_id='$id'";
    $conn->query($sql_edu);

    echo "Record updated successfully";
}
$conn->close();
