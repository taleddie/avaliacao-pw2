<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frete</title>
    <link rel="stylesheet" href="frete.css">
</head>
<body>
    
<section>
    <div class="titulo">
    <h1>Logística Express</h1>
    </div>
    <div class="formBox">
    <form method="POST">
        <label for="name">Distância (km)</label>
        <input type="text" name="d">

        <label for="name">Peso (kg)</label>
        <input type="text" name="p">

        <label for="name">Tipo de envio (Normal ou Expresso)</label>
        <input type="text" name="e">

        <input class="btn" type="submit">
    </form>
    </div>
</section>

    <?php 

    if ($_POST) {
        $distancia = $_POST['d'];
        $peso = $_POST['p'];
        $envio = $_POST['e'];
        $vt = 10;
        $i = 0;

        
        if ($i<$distancia){
            $vt += 0.50*$distancia;
        } if ($peso > 20) {
            $vt += 30;
        } if ($envio=="Expresso" || $envio=="expresso") {
            $vt += (20/100)*$vt;
        }

        echo "<h2>Valor total do frete: <b>R$" .$vt ."</b>
        </h2>";
    }
    ?>
</body>
</html>