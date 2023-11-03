<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
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
<body>

	<form id="addAgentForm" action="proses_tambah_detail_pesanan.php" method="post">
        <h1>Tambah Data Detail Pesasan</h1>

        <label for="id_order">ID Order:</label>
        <input type="text" id="id_order" name="id_order" required>

        <label for="jumlah_order">Jumlah Order:</label>
        <input type="text" id="jumlah_order" name="jumlah_order" required>

        <label for="harga">Harga:</label>
        <input type="text" id="harga" name="harga" required>

        <label for="jenis barang">Jenis Barang:</label>
        <input type="text" id="jenis barang" name="jenis barang" required>

        <label for="total">Total:</label>
        <input type="text" id="total" name="total" required>

          

        <div class="btn-container">
            <input type="submit" value="Submit">
            <br>
            <a href="detail.php"><input type="button" value="Kembali"></a>
        </div>
    </form>

	</body>
</html>