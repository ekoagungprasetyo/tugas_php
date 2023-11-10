<?php
include("koneksi.php");

if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Menampilkan SweetAlert sebelum menghapus data
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
    echo "<script>
            Swal.fire({
              title: 'Are you sure?',
              text: 'You won\\'t be able to revert this!',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {
                // Lakukan penghapusan data
                window.location.href = 'proses_hapus_data.php?delete_id=" . $delete_id . "';
              }
            });
          </script>";

    // Lakukan penghapusan data setelah SweetAlert ditampilkan
    $delete_query = "DELETE FROM user_details WHERE user_id='$delete_id'";
    
    if ($connection->query($delete_query) === TRUE) {
        // Menampilkan SweetAlert setelah penghapusan berhasil
        echo "<script>
                Swal.fire({
                  title: 'Deleted!',
                  text: 'Your record has been deleted.',
                  icon: 'success'
                }).then(() => {
                  // Redirect kembali ke halaman data.php setelah menutup SweetAlert
                  window.location.href = 'data.php';
                });
              </script>";
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}

$connection->close();
?>
