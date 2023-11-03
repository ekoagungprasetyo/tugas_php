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
    <form id="updateForm" action="proses_edit_data.php" method="post">
        <h1>Edit Data</h1>
        <?php
        include 'koneksi.php';

        if (isset($_GET['data'])) {
            $data = $_GET['data'];
            $result = $connection->query("SELECT * FROM user_details WHERE user_id='$data'");
            if ($result) {
                $row = $result->fetch_assoc();
            } else {
                echo "Error in fetching data from the database.";
            }
        } else {
            echo "Error: 'data' is not defined.";
        }
        ?>

        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>" required>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $row['first_name']; ?>" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $row['last_name']; ?>" required>

        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" value="<?php echo $row['gender']; ?>" required>

        <div class="btn-container">
            <input type="submit" value="Submit">
            <br>
            <a href="data.php"><input type="button" value="Kembali"></a>
        </div>
    </form>
   
</body>

</html>