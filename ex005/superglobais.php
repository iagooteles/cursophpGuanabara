<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../styles-global/style.css">

    <title>Super Globais</title>
</head>

<body>

    <main>
        <pre>
            <?php
                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);
                
                echo "<h1>Superglobal POSTREQUEST</h1>";
                var_dump($_REQUEST);
            ?>
        </pre>
    </main>
</body>

</html>