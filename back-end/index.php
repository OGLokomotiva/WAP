<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="appdata/style.css">
    <title>Hotel Plaza</title>
</head>
<body>
    <form action="new_apartment.php" method="POST">

        <label for="floor">Poschodí</label>
        <select id="floor" name="floor">
            <option value="1">1.</option>
            <option value="2">2.</option>
            <option value="3">3.</option>
            <option value="4">4.</option>
        </select>

        <label for="number">Číslo pokoje</label>
        <input type="number" id="number" name="number">

        <label for="number_of_persons">Počet osob</label>
        <select id="number_of_persons" name="number_of_persons">
            <option value="2">Pro 2 osoby</option>
            <option value="4">Pro 4 osoby</option>
        </select>

        <label for="state">Stav</label>
        <select id="state" name="state">
            <option value="Obsazeno">Obsazeno</option>
            <option value="Volno">Volno</option>
        </select>

        <input type="submit" value="Vytvořit">
    </form>

    <table>
        <tr>
            <th>Poschodí</th>
            <th>Číslo Pokoje</th>
            <th>Pro</th>
            <th>Stav</th>
            <th>Upravit</th>
        </tr>
        <?php
            require('connection.php');

            $MySql = 'SELECT ALL* FROM apartments';
            $data = mysqli_query($connect, $MySql);
            
            while ($column = mysqli_fetch_assoc($data)) {
                echo '
                    <tr>
                        <td>'.$column['floor'].'</td>
                        <td>'.$column['number'].'</td>
                        <td>'.$column['number_of_persons'].' osoby</td>
                        <td>'.$column['state'].'</td>
                        <td><button><a href="edit.php?id='.$column['id'].'">Smazat</a></button></td>
                    </tr>
                ';
            }
        ?>
    </table>
</body>
</html>