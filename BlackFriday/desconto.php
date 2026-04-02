<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLACK FRIDAY Americanas</title>
    <link rel="stylesheet" href="desconto.css">
    <link rel="icon" href="logoA.png">
</head>
<body>

    <section>
        <div class="tittle">
            <h1>BLACK FRIDAY <br> <img src="logo1.png" alt=""></h1>
        </div>

        <form method="POST">
            <label for="valor">Valor do produto</label>
            <input type="number" required name="v">
            <label for="cupom">Código de cupom</label>
            <input type="number" name="c">
            <input class="btn" type="submit" value="Calcular Desconto">
        </form>
    </section>

    <?php 
    
    if ($_POST) {
        $valor = $_POST['v'];
        $cupom = $_POST['c'];
        $desconto = 0;
        $valorFinal = 0;

        if ($valor > 500) {
            $desconto = (10/100)*$valor;
        }

        if ($cupom == "AMIGAO10") {
            $desconto += 10;
        } else {
            echo "<p style='color: rgba(105, 105, 105, 0.756);'>Cupom inválido</p>";
        }

        $valorFinal = $valor - $desconto;

        echo "<h3 style='margin-top:-10px'>Valor original: <b>R$" .$valor ."</b> <br>Desconto aplicado: <b>R$" .$desconto ."</b> <br>Valor final: <b>R$" .$valorFinal ."</b></h3>";

    }

    ?>

</body>
</html>