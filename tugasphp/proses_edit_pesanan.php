<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah_order = $_POST['jumlah_order'];
    $id_order = $_POST['id_order'];
    $harga = $_POST['harga'];
    $jenis_barang = $_POST['jenis_barang'];
    $total = $_POST['total'];

    // Query untuk melakukan update data
    $update_query = "UPDATE order_detail SET jumlah_order='$jumlah_order', harga='$harga', jenis_barang='$jenis_barang', total='$total' WHERE id_order='$id_order'";

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
                      // Redirect ke halaman detail.php setelah menutup SweetAlert
                      window.location.href = 'detail.php';
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
