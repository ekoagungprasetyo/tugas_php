<?php include("koneksi.php");
 $query = mysqli_query($connection, "SELECT * FROM barang ");

?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>

        

    	body {
    		font-family: 'Noto Sans JP', sans-serif;
    	}
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
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
        .fcc-btn1, .fcc-btn2 {
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
        .fcc-btn1:hover, .fcc-btn2:hover {
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
     <h3> Data Barang </h3>
     <a class='fcc-btn1' href='tambah_data_barang.php'> Tambah </a>
    <form action="" method="post">
    <form action="" method="post">
        <table border="1">
            <tr>
                <th>name</th>
                <th>jenis</th>
                <th>id_barang</th>
                <th>Action</th>
                
            </tr>

            <?php if(mysqli_num_rows($query)>0){?>
                <?php
                while ($data = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $data['name'] . "</td>";
                    echo "<td>" . $data['jenis'] . "</td>";
                    echo "<td>" . $data['id_barang'] . "</td>";
                    
                    echo "<td>";
                    echo "<a class='fcc-btn1' href='form_edit_barang.php?data=".$data['id_barang']."'><i class='fas fa-edit'></i> Edit</a> ";
                      echo "<a class='fcc-btn2' href='proses_hapus_barang.php?delete_id=".$data['id_barang']."'><i class='fas fa-trash-alt'></i> Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            <?php } ?>
        </table>
    </form>
</body>
</html>
