<?php
    $jumlah_order = $_POST['jumlah_order'];
    $id_order = $_POST['id_order'];
    $harga = $_POST['harga'];
    $jenis_barang = $_POST['jenis_barang'];
    $total = $_POST['total'];

    include_once("koneksi.php");

    $query = mysqli_query($connection, "INSERT INTO 
    order_detail (jumlah_order, id_order, harga, jenis_barang, total)  VALUES ('$jumlah_order', '$id_order', '$harga', '$jenis_barang', '$total')");

    header("Location:detail.php");
?>
