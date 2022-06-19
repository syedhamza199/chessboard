<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border: 1px solid black;
        }

        td {
            border: 1px;
            padding: 20px;
        }

        .bgcolor {
            background: black;
        }
    </style>
    <title>chessboard</title>

</head>

<body>
    <form action="" method="POST">
        <input type="text" name="size">
        <input type="submit" name="submit" rrquired>
    </form>
    <br>

    <table>
        <?php
        if (isset($_POST['submit'])) {
            $data = $_POST['size'];

            for ($row = 1; $row <= $data; $row++) {
                echo "<tr>";
                for ($col = 1; $col <= $data; $col++) {
                    if (($row + $col) % 2 == 0) {
                        echo "<td class='bgcolor'> </td>";
                    } else {
                        echo "<td ></td>";
                    }
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>