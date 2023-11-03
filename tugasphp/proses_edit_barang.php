<?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $jenis = $_POST['jenis'];
        $id_barang = $_POST['id_barang'];
        
        

        $update_query = "UPDATE barang SET name='$name', jenis='$jenis', id_barang='$id_barang' WHERE id_barang='$id_barang'";

        if ($connection->query($update_query) === TRUE) {
            echo "Record updated successfully";
            header("Location: barang.php");
        } else {
            echo "Error updating record: " . $connection->error;
        }

        $connection->close();
    }
?>
