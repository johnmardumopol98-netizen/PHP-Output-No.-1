<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $req_type = 'POST';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output No. 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            background-color: #fff;
            max-width: 500px;
            margin: 20px auto;
            border-collapse: collapse;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ccc;
        }

        td:first-child {
            font-weight: bold;
            background-color: #f9f9f9;
            width: 150px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }

        a:hover {
            color: #388E3C;
        }
    </style>
</head>
<body>
    <h2>Data is sent here, and it is stored in <?php echo $req_type; ?> variable</h2>
    <table>
        <tr>
            <td>EMAIL:</td>
            <td><?php echo ($req_type === 'POST') ? $_POST['mail'] : ''; ?></td>
        </tr>
        <tr>
            <td>AGE:</td>
            <td><?php echo ($req_type === 'POST') ? $_POST['age'] : ''; ?></td>
        </tr>
        <tr>
            <td>GENDER:</td>
            <td><?php echo ($req_type === 'POST') ? $_POST['gender'] : ''; ?></td>
        </tr>
        <tr>
            <td>CONTACT NUMBER:</td>
            <td><?php echo ($req_type === 'POST') ? "+63 " . $_POST['num'] : ''; ?></td>
        </tr>
        <tr>
            <td>ADDRESS:</td>
            <td><?php echo ($req_type === 'POST') ? $_POST['address'] : ''; ?></td>
        </tr>
    </table>

    <a href="./">Return to Main Form</a>
</body>
</html>