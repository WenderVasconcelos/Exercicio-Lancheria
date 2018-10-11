<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once '../model/Lancheria.php';
            session_start();
            $l = new Lancheria();
            $l = unserialize($_SESSION['lancheria']);
            echo $l;
        ?>
    </body>
</html>
