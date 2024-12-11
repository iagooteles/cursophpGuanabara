<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Idade</title>

    <link rel="stylesheet" href="./../styles-global/style.css">
</head>

<body>
    <?php 
        $atual = date("Y");
        $nascimento = $_GET['nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? $atual;
        
        $idade = $ano - $nascimento;        
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual -1?>" value=" <?=$nascimento?>">
            <label for="ano">Quer saber sua idade em qual ano?</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nascimento?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?></p>
    </section>
</body>

</html>