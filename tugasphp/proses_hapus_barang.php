<?php
include("koneksi.php");

if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM barang WHERE id_barang='$delete_id'";
    if ($connection->query($delete_query) === TRUE) {
        echo "Record deleted successfully";
        header("Location: barang.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
?>
