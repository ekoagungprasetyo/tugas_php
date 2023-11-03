<?php
include("koneksi.php");

if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM order_detail WHERE id_order='$delete_id'";
    if ($connection->query($delete_query) === TRUE) {
        echo "Record deleted successfully";
        header("Location: detail.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
?>
