<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Šachy</title>
</head>
<style>
    body {
    margin-top: 0px;
    background-color: white;
}
td {
    height: 50px; 
    width: 50px;
}

.white {
    background-color: white;
}

.black {
    background-color: black;
}

table {
    margin-left: auto;
    margin-right: auto;
    border: solid #000000;
}
</style>
<body>
    <table>
        <?php
            for ($row=1; $row<=8;$row++) {
                echo "<tr>";
                for ($colum=1;$colum<=8;$colum++) {
                    $total=$row+$colum;
                    if ($total%2==0) {
                        echo "<td class='white'></td>";
                    } else {
                        echo "<td class='black'></td>";
                    }
                } echo "</tr>";
            }
        ?>
    </table>
</body>
</html>