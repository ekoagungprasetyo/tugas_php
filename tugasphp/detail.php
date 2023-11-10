<?php
include("koneksi.php");
$query = mysqli_query($connection, "SELECT * FROM order_detail ");
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">


    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  



    <style>
        body {
            font-family: 'Noto Sans JP', sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .fcc-btn1,
        .fcc-btn2 {
            display: inline-block;
            padding: 8px 12px;
            margin: 4px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .fcc-btn1 {
            background-color: #4CAF50;
            color: white;
        }

        .fcc-btn2 {
            background-color: #f44336;
            color: white;
        }

        .fcc-btn1:hover,
        .fcc-btn2:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="col-md-12 text-center mb-5 mt-5">
        <a href="data.php"> User Detail </a>|
        <a href="detail.php"> Detail Pesanan </a>|
        <a href="barang.php"> Barang </a>
    </div class="col-md-12">
    <h3> Data Detail Pesanan</h3>
    <a class='fcc-btn1' href='tambah_detail_pesanan.php'> Tambah </a>
    <form action="" method="post">
        
        <table id="detail" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>id_order</th>
                    <th>jumlah_order</th>
                    <th>harga</th>
                    <th>jenis barang</th>
                    <th>total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($query) > 0) { ?>
                    <?php
                    while ($data = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>" . $data['id_order'] . "</td>";
                        echo "<td>" . $data['jumlah_order'] . "</td>";
                        echo "<td>" . "Rp" . number_format($data['harga']) . "</td>";
                        echo "<td>" . $data['jenis_barang'] . "</td>";
                        echo "<td>" . "Rp" . number_format($data['total']) . "</td>";
                        echo "<td>";
                        echo "<a class='fcc-btn1' href='form_edit_detailpesanan.php?data=" . $data['id_order'] . "'><i class='fas fa-edit'></i> Edit</a> ";
                        echo "<a class='fcc-btn2' href='proses_hapuspesanan.php?delete_id=" . $data['id_order'] . "'><i class='fas fa-trash-alt'></i> Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                <?php } ?>
            </tbody>
        </table>
    </form>

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#detail').DataTable();
                
            });
    </script>
</body>

</html>
