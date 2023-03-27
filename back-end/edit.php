<?php
    require('connection.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $MySql = "DELETE FROM apartments WHERE id = $id";
        $column = mysqli_query($connect, $MySql);
        if ($column) {
            echo "Apartmá bylo smazáno.";
        } else {
            echo "Chyba při mazání záznamu: " . mysqli_error($con);
        }
    } else {
        echo "Něco se pokazilo.";
    }
?>

<button><a href="index.php">Zpět</a></button>