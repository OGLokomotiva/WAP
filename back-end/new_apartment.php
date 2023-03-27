<?php
    require('connection.php');

    echo '<button><a href="index.php">Zpět na hlavní stránku</a></button>';

    if ($mysql = $connect->prepare('SELECT id FROM apartments WHERE number = ?')) {
        $mysql->bind_param('s', $_POST['number']);
        $mysql->execute();
        $mysql->store_result();
        
        if ($mysql->num_rows > 0) {
            echo 'Apartmá s tímto číslem již existuje';
            $mysql->close();
            exit;
        }
        $mysql->close();
    }

    if ($mysql = $connect->prepare('INSERT INTO apartments (floor, number, number_of_persons, state) VALUES (?, ?, ?, ?)')) {
        $mysql->bind_param('ssss', $_POST['floor'], $_POST['number'], $_POST['number_of_persons'], $_POST['state']);
        $mysql->execute();
        
        echo 'Apartmá úspěšně vytvořeno.';
        $mysql->close();
    } else {
        echo 'Zkuste to prosím znovu.';
    }
?>