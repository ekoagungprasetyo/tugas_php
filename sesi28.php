<?php

$data = file_get_contents("data.json");
$students = json_decode($data);

echo '<style>
    table {
        font-family: Arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .navbar {
        background-color: #F5B800;
        padding: 15px;
    }
</style>';

echo "<div class='navbar'><h2>Daftar Nilai</h2></div>";

echo '<table>
<tr>
<th>No.</th>
<th>Nama</th>
<th>Kelas</th>
<th>Alamat</th>
<th>TTL</th>
<th>Umur</th>
<th>Nilai</th>
<th>Hasil</th>
</tr>';

$nomer = 1;
foreach ($students as $key => $student) {
    // Calculate age from date of birth
    $tanggal_lahir = new DateTime($student->tanggal_lahir);
    $today = new DateTime('today');
    $umur = $today->diff($tanggal_lahir)->y;

    // Format TTL to DMY
    $ttl = $tanggal_lahir->format('d F Y');
    // Calculate grade
    $hasil = '';
    if ($student->nilai >= 55 && $student->nilai <= 65) {
        $hasil = 'D';
    } elseif ($student->nilai >= 66 && $student->nilai <= 70) {
        $hasil = 'C';
    } elseif ($student->nilai >= 71 && $student->nilai <= 85) {
        $hasil = 'B';
    } elseif ($student->nilai >= 86 && $student->nilai <= 90) {
        $hasil = 'A';
    }

    echo "<tr>";
    echo "<td>" . $nomer . "</td>";
    echo "<td>" . $student->nama . "</td>";
    echo "<td>" . $student->kelas . "</td>";
    echo "<td>" . $student->alamat . "</td>";
    echo "<td>" . $ttl . "</td>";
    echo "<td>" . $umur . " tahun" . "</td>";
    echo "<td>" . $student->nilai . "</td>";
    echo "<td>" . $hasil . "</td>";
    echo "</tr>";
    $nomer++;
}

echo '</table>';

?>
