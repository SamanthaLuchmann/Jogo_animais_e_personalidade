<?php

$correto = $_GET['apresentado'];
$escolhido = $_GET['escolhido'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <p>Você escolheu: <strong><?=$escolhido?></strong>. A opção correta é: <strong><?=$correto?></strong>.</p>
    </body>
</html>
