<!DOCTYPE html>
<html>
<head>
    <title>Tabel Looping PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 20%;
            margin: 10px;

        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;

        }

        th{
        	background-color: lightskyblue;
        	text-align: center;
        }

        tr:nth-child(even) td {
            background-color: #D3D3D3; 
        }

        tr:nth-child(odd) td {
            background-color: white; 
        }
    </style>
</head>
<body>

    <h2>Tabel Looping PHP</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>

            <?php
            // Loop untuk membuat 10 baris
            for ($i = 1; $i <= 10; $i++) {
                // Menghitung indeks kelas dari 10 ke 1
                $kelas = 11 - $i;

                // Menampilkan baris tabel
                echo "<tr>
                        <td>$i</td>
                        <td>Nama ke $i</td>
                        <td>Kelas $kelas</td>
                      </tr>";
            }
            ?>



        </tbody>
    </table>

</body>
</html>
