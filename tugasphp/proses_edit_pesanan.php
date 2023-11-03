<?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah_order = $_POST['jumlah_order'];
        $id_order = $_POST['id_order'];
        $harga = $_POST['harga'];
        $jenis_barang = $_POST['jenis_barang'];
        $total = $_POST['total'];
        

        $update_query = "UPDATE order_detail SET jumlah_order='$jumlah_order', harga='$harga', jenis_barang='$jenis_barang', total='$total' WHERE id_order='$id_order'";

        if ($connection->query($update_query) === TRUE) {
            echo "Record updated successfully";
            header("Location: detail.php");
        } else {
            echo "Error updating record: " . $connection->error;
        }

        $connection->close();
    }
?>
