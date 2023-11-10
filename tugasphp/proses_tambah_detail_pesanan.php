<?php
$jumlah_order = $_POST['jumlah_order'];
$id_order = $_POST['id_order'];
$harga = $_POST['harga'];
$jenis_barang = $_POST['jenis_barang'];
$total = $_POST['total'];

include_once("koneksi.php");

$query = mysqli_query($connection, "INSERT INTO order_detail (jumlah_order, id_order, harga, jenis_barang, total)  VALUES ('$jumlah_order', '$id_order', '$harga', '$jenis_barang', '$total')");

if ($query) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>"; // Sertakan pustaka SweetAlert
    echo "<script>
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Data berhasil ditambahkan!',
              showConfirmButton: false,
              timer: 1500
            }).then(function() {
              window.location.href = 'detail.php'; // Redirect ke halaman detail.php setelah menutup SweetAlert
            });
          </script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
