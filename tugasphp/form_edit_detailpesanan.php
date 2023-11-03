<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <title>Edit Data</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"],
        input[type="button"] {
            width: 100%;
            background-color: #000;
            color: #fff;
            border: 0;
            padding: 10px;
            cursor: pointer;
            border-radius: 3px;
        }

        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #333;
        }

        .btn-container {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <form id="updateForm" action="proses_edit_pesanan.php" method="post">
        <h1>Edit Data Pesanan</h1>
       

        <?php
        include 'koneksi.php';

        if (isset($_GET['data'])) {
            $data = $_GET['data'];
            $result = $connection->query("SELECT * FROM order_detail WHERE id_order='$data'");
            if ($result) {
                $row = $result->fetch_assoc();
            } else {
                echo "Error in fetching data from the database.";
            }
        } else {
            echo "Error: 'data' is not defined.";
        }
        ?>

        <input type="hidden" name="id_order" value="<?php echo $row['id_order']; ?>">

        <label for="jumlah_order">jumlah_order:</label>
        <input type="text" id="jumlah_order" name="jumlah_order" value="<?php echo $row['jumlah_order']; ?>" required>

        <label for="id_order">id_order:</label>
        <input type="text" id="id_order" name="id_order" value="<?php echo $row['id_order']; ?>" required>

        <label for="jenis_barang">jenis_barang:</label>
        <input type="text" id="jenis_barang" name="jenis_barang" value="<?php echo $row['jenis_barang']; ?>" required>


        <label for="harga">harga:</label>
        <input type="text" id="harga" name="harga" value="<?php echo $row['harga']; ?>" required>


        <label for="total">total:</label>
        <input type="text" id="total" name="total" value="<?php echo $row['total']; ?>" required>

               <div class="btn-container">
            <input type="submit" value="Submit">
            <br>
            <a href="detail.php"><input type="button" value="Kembali"></a>
        </div>
    </form>
   
</body>

</html>