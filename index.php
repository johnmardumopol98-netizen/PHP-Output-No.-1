<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        fieldset {
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 8px;
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        legend {
            font-weight: bold;
            padding: 0 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            vertical-align: middle;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px 15px;
            margin-right: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="reset"] {
            background-color: #f44336;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="reset"]:hover {
            background-color: #e53935;
        }

        span {
            padding: 8px;
            background-color: #eee;
            border-radius: 4px 0 0 4px;
            border: 1px solid #ccc;
            border-right: none;
        }
    </style>
</head>
<body>
    <h1>PHP Output No. 1</h1>
    
    <fieldset>
        <legend>This form uses POST request</legend>
        <form action="redirect.php" method="POST">
        <table>
            <tr>
                <td>EMAIL</td>
                <td>
                    <input type="email" name="mail" placeholder="Enter EMAIL (example@email.com)" required />
                </td>
            </tr>

            <tr>
                <td>AGE</td>
                <td>
                    <input type="number" name="age" placeholder="Enter AGE" required />
                </td>
            </tr>

            <tr>
                <td>GENDER</td>
                <td>
                <select name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                </td>
            </tr>

            <tr>
                <td>CONTACT NUMBER</td>
                <td>
                    <span>+63</span>
                    <input type="tel" name="num" placeholder="912 662 9121" pattern="[0-9]{3}\s[0-9]{3}\s[0-9]{4}" required />
                </td>
            </tr>

            <tr>
                <td>ADDRESS</td>
                <td>
                    <input type="text" name="address" placeholder="Enter ADDRESS" required />
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>
</body>
</html>