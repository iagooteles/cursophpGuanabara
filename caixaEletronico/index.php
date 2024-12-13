<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>

    <link rel="stylesheet" href="./../styles-global/style.css">

</head>

<body>

    <?php 
        $saque = $_GET['saque'] ?? '0';
        $resto = $saque;

        $tot100 = floor($resto / 100);
        $resto %= 100;

        $tot50 = floor($resto / 50);
        $resto %= 50;

        $tot10 = floor($resto / 10);
        $resto %= 10;

        $tot5 = floor($resto / 5);
        $resto %= 5;    
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <h2>No caixa só há notas de R$100 R$50 R$10 e R$5 disponíveis.</h2>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual o Valor total que deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" value="<?=$saque?>" required>

            <p style="font-size: 0.7em;">Notas disponíveis: R$100, R$50, R$10 e R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de R$<?=number_format($saque, 2, "," , ".")?> realizado</h2>

        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>

        <ul>
            <li><img src="./images/100-reais.jpg" alt="nota de 100" class="nota"> x<?=$tot100?></li>
            <li><img src="./images/50-reais.jpg" alt="nota de 50" class="nota"> x<?=$tot50?></li>
            <li><img src="./images/10-reais.jpg" alt="nota de 10" class="nota"> x<?=$tot10?></li>
            <li>5<img src="./images/5-reais.jpg" alt="nota de 5" class="nota"> x<?=$tot5?></li>
        </ul>

    </section>

</body>

</html>