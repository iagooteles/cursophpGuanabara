<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de segundos</title>

    <link rel="stylesheet" href="./../styles-global/style.css">

</head>

<body>

    <?php 
        $total_segundos = $_GET['seg'] ?? 00;
        $sobra = $total_segundos;
        
        $semana = (int) ($sobra / 604_800);
        $sobra = $sobra % 604_800;

        $dia = (int) ($sobra / 86_400);
        $sobra = $sobra % 86_400;

        $hora = (int) ($sobra / 3_600);
        $sobra = $sobra % 3_600;

        $minuto = (int) ($sobra / 60);
        $sobra = $sobra % 60;

        $segundo = $sobra;
    ?>
    <main>
        <h1>Calculadora de segundos</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual o total de segundos</label>
            <input type="number" name="seg" id="seg" min="0" step="1" value="<?=$total_segundos?>" required>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <p>
            Analisando o valor que você digitiou, <strong><?=number_format($total_segundos, 0, ",", ".")?>
                segundos</strong>
            equivalem a um total
            de:
        </p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>

    </section>

</body>

</html>