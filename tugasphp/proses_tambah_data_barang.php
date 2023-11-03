<?php
    $name = $_POST['name'];
    $jenis = $_POST['jenis'];
    $id_barang = $_POST['id_barang'];

    include_once("koneksi.php");

    $query = mysqli_query($connection, "INSERT INTO 
    barang (name, jenis, id_barang)  VALUES ('$name', '$jenis', '$id_barang')");

    header("Location:barang.php");
?>
