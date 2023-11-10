<?php
$name = $_POST['name'];
$jenis = $_POST['jenis'];
$id_barang = $_POST['id_barang'];

include_once("koneksi.php");

$query = mysqli_query($connection, "INSERT INTO barang (name, jenis, id_barang)  VALUES ('$name', '$jenis', '$id_barang')");

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
              window.location.href = 'barang.php'; // Redirect ke halaman barang.php setelah menutup SweetAlert
            });
          </script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
