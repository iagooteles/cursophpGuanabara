<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");
            
            $nome = "Iago";
            $sobrenome = "Teles";
            const PAIS = "Brazil";

            echo "Hello World!";
            echo "<p>Meu nome: $nome!</p>";
            echo "<p>Meu sobrenome é: $sobrenome!</p>";
            echo "<o>Eu moro no " . PAIS . "!";
            echo "<p>Hoje é dia " . date("d/m/Y") . "</p>";
            echo "<p>A hora atual é: " . date("G:i:s") . "</p>";
        ?>
    </h1>

    <p>Vamos nos livrar da maldição</p>


</body>

</html>