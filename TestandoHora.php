<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Testantdo a hora</title>
</head>
<body>
    <?php
        echo "Fuso Horário: " .ini_get("date.timezone") ."<br/>";
        echo "Hora atual: " .date("Y-m-d H:i:s");
    ?>
</body>
</html>