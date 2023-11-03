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
    <form id="updateForm" action="proses_edit_barang.php" method="post">
        <h1>Edit Data Barang</h1>
       

        <?php
        include 'koneksi.php';

        if (isset($_GET['data'])) {
            $data = $_GET['data'];
            $result = $connection->query("SELECT * FROM barang WHERE id_barang='$data'");
            if ($result) {
                $row = $result->fetch_assoc();
            } else {
                echo "Error in fetching data from the database.";
            }
        } else {
            echo "Error: 'data' is not defined.";
        }
        ?>

        <input type="hidden" name="name" value="<?php echo $row['name']; ?>">

        <label for="name">name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>

        <label for="jenis">jenis:</label>
        <input type="text" id="jenis" name="jenis" value="<?php echo $row['jenis']; ?>" required>

        <label for="id_barang">id_barang:</label>
        <input type="text" id="id_barang" name="id_barang" value="<?php echo $row['id_barang']; ?>" required>


        

               <div class="btn-container">
            <input type="submit" value="Submit">
            <br>
            <a href="barang.php"><input type="button" value="Kembali"></a>
        </div>
    </form>
   
</body>

</html>