<?php
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    

    include_once("koneksi.php");

    $query = mysqli_query($connection, "INSERT INTO 
    user_details (user_id, username, first_name, last_name, gender)  VALUES ('$user_id', '$username', '$first_name', '$last_name', '$gender')");

    header("Location:detail.php");
?>
