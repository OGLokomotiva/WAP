<?php
    $db_con = mysqli_connect('localhost', 'root', '', 'api');
    
    $re = array();

    if($db_con) {
        $mysql = "SELECT * FROM users";
        $result = mysqli_query($db_con, $mysql);

        if ($result) {
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $re[$i]['name'] = $row ['name'];
                $i++;
            }
            echo json_encode($re, JSON_UNESCAPED_UNICODE);
        }
    } else {
        echo 'error';
    }
?>