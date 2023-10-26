<?php include("koneksi.php");
 $query = mysqli_query($connection, "SELECT * FROM user_details ");

?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>


    	body {
    		font-family: 'Open Sans', sans-serif;
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
    <form action="" method="post">
        <table border="1">
            <tr>
                <th>user_id</th>
                <th>username</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>gender</th>
                <th>password</th>
                <th>Action</th>
            </tr>

            <?php if(mysqli_num_rows($query)>0){?>
                <?php
                while ($data = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $data['user_id'] . "</td>";
                    echo "<td>" . $data['username'] . "</td>";
                    echo "<td>" . $data['first_name'] . "</td>";
                    echo "<td>" . $data['last_name'] . "</td>";
                    echo "<td>" . $data['gender'] . "</td>";
                    echo "<td>" . $data['password'] . "</td>";
                    echo "<td>";
                    echo "<a class='fcc-btn1' href='#'><i class='fas fa-edit'></i> Edit</a> ";
                    echo "<a class='fcc-btn2' href='#'><i class='fas fa-trash-alt'></i> Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            <?php } ?>
        </table>
    </form>
</body>
</html>
