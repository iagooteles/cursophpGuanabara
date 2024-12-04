<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>

    <link rel="stylesheet" href="./../styles-global/style.css">
</head>

<body>

    <?php
    $dividendo = $_GET['d1'] ?? 0;
    $divisor = $_GET['d2'] ?? 1;
    ?>

    <main>
        <h1>Anatomia de uma divisão</h1>

        <form action="" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" value="<?= $dividendo ?>">

            <label for="d2">DividendoDivisor</label>
            <input type="number" name="d2" id="d2" min="1" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da divisão</h2>
        <?php

            $quociente = (int) ($dividendo / $divisor);
            $resto = $dividendo % $divisor;

            echo "<ul>";
            echo "<li>Dividendo: $dividendo</li>";
            echo "<li>Divisor: $divisor</li>";
            echo "<li>Quociente: $quociente</li>";
            echo "<li>Resto: $resto</li>";
            echo "<ul>";            
        ?>

    </section>


    <table class="divisao">
        <tr>
            <td><?=$dividendo?></td>
            <td><?=$divisor?></td>
        </tr>
        <tr>
            <td><?=$resto?></td>
            <td><?=$quociente?></td>
        </tr>
    </table>
</body>

</html>