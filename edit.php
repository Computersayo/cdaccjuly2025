<?php
include 'dp.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $new_comment = $_POST['comment'];

    $sql = "UPDATE students SET comment='$new_comment' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Comment updated.";
    } else {
        echo "Error updating comment: " . $conn->error;
    }
}
?>

<form method="post" action="edit.php">
  Student ID: <input type="text" name="id"><br>
  New Comment: <textarea name="comment"></textarea><br>
  <input type="submit" value="Update Comment">
</form>
