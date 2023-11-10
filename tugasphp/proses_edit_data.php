<?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = $_POST['user_id'];
        $username = $_POST['username'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];

        // Query untuk melakukan update data
        $update_query = "UPDATE user_details SET username='$username', first_name='$first_name', last_name='$last_name', gender='$gender' WHERE user_id='$user_id'";

        // Melakukan query update
        $result = mysqli_query($connection, $update_query);

        // Cek apakah query berhasil dijalankan
        if ($result) {
            // Menampilkan SweetAlert sebelum menyimpan perubahan
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>"; // Sertakan pustaka SweetAlert
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
                          // Setelah menutup SweetAlert, lanjutkan dengan menyimpan perubahan
                          window.location.href = 'data.php';
                        });
                      } else if (result.isDenied) {
                        Swal.fire('Changes are not saved', '', 'info');
                      }
                    });
                  </script>";
        } else {
            echo "Error updating record: " . mysqli_error($connection);
        }

        $connection->close();
    }
?>
