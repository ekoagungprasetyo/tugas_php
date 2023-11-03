<?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = $_POST['user_id'];
        $username = $_POST['username'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];

        $update_query = "UPDATE user_details SET username='$username', first_name='$first_name', last_name='$last_name', gender='$gender' WHERE user_id='$user_id'";

        if ($connection->query($update_query) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $connection->error;
        }
        if ($connection->query($update_query) === TRUE) {
        echo "Record updated successfully";
        header("Location: data.php");
        } else {
        echo "Error updating record: " . $connection->error;
        }


        $connection->close();

    }
?>
