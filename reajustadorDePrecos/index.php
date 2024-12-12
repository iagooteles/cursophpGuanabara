<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>

    <link rel="stylesheet" href="./../styles-global/style.css">

</head>

<body>
    <?php
        $preco = $_GET['preco'] ?? '0';
        $porc = $_GET['porc'] ?? '0';
        $formula = ($preco * $proc) / 100;
    ?>

    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">

            <label for="reaj">Qual será o percentual de reajuste? (<strong><span
                        id="porcentagem">?</span>%</strong>)</label>
            <input type="range" name="porc" id="porc" min="0" max="100" step="1" oninput="mudarValor()"
                value="<?=$porc?>">

            <input type="submit" value="Reajustar">

        </form>
    </main>

    <?php 
        $aumento = $preco * $porc / 100;
        $novo_preco = $preco + $aumento;    
    ?>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>
            O produto que custava R$<?=number_format($preco, 2, ",", ".")?>, com <strong><?=$porc?>% de aumento</strong>
            vai passar a custar<strong>R$<?=number_format($novo_preco, 2, ",", ".")?></strong> a partir de agora.
        </p>

    </section>

    <script>
    function mudarValor() {
        porcentagem.innerText = porc.value;
    }
    </script>

</body>

</html>