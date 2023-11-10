<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];

    // Query untuk menambahkan data ke database
    $query = "INSERT INTO user_details (user_id, username, first_name, last_name, gender) VALUES ('$user_id', '$username', '$first_name', '$last_name', '$gender')";
    $result = mysqli_query($connection, $query);

    // Cek apakah data berhasil ditambahkan
    if ($result) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>"; // Sertakan pustaka SweetAlert
        echo "<script>
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Data berhasil ditambahkan!',
                  showConfirmButton: false,
                  timer: 1500
                }).then(function() {
                  window.location.href = 'data.php'; // Redirect ke halaman data.php setelah menutup SweetAlert
                });
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

    // Tutup koneksi
    mysqli_close($connection);
}
?>
