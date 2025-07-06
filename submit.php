<?php
include 'dp.php';

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$id = $_POST['id_number'];
$phone = $_POST['phone_number'];
$comment = $_POST['comment'];

$sql = "INSERT INTO students (first_name, last_name, id_number, phone_number, comment)
        VALUES ('$fname', '$lname', '$id', '$phone', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Student registered successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
