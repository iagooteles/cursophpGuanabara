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
            <label for="seg">Qual o Valor total que deseja sacar?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" value="<?=$total_segundos?>" required>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>

    </section>

</body>

</html>