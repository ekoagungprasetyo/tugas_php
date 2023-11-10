<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $jenis = $_POST['jenis'];
    $id_barang = $_POST['id_barang'];

    // Query untuk melakukan update data
    $update_query = "UPDATE barang SET name='$name', jenis='$jenis' WHERE id_barang='$id_barang'";

    // Eksekusi query update
    $result = $connection->query($update_query);

    // Periksa hasil query dan tampilkan SweetAlert
    if ($result) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
        echo "<script>
                Swal.fire({
                  title: 'Do you want to save the changes?',
                  showDenyButton: true,
                  showCancelButton: true,
                  confirmButtonText: 'Save',
                  denyButtonText: 'Don\\'t save'
                }).then((result) => {
                  if (result.isConfirmed) {
                    Swal.fire('Saved!', '', 'success').then(function() {
                      // Redirect ke halaman barang.php setelah menutup SweetAlert
                      window.location.href = 'barang.php';
                    });
                  } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info');
                  }
                });
              </script>";
    } else {
        // Jika query gagal, tampilkan pesan kesalahan
        echo "Error updating record: " . $connection->error;
    }

    // Tutup koneksi
    $connection->close();
}
?>
