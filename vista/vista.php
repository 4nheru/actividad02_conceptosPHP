<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidores</title>
    <link rel="stylesheet" href="https://minimalistcss.github.io/dist/minimalist.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css\styles.css">
</head>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<div class="container mt-5">
    <div class="card m-5">
        <div class="card-body text-center">
            <form action="" method="post">
                <h1>Convertidor de Longitud</h1>
                <input id="numero" type="number" name="numero" required placeholder="Ingrese cantidad en metros" class="input focus-indigo border-indigo indigo ph-indigo-lighter"><br><br>
                <input type="radio" name="long" value="cm"> CM
                <input type="radio" name="long" value="mm"> MM
                <input type="radio" name="long" value="km"> KM
                <br>
                <?php
                if ($datos != null) {
                    echo $datos;
                }
                ?><br>
                <input type="submit" name="convertL" value="Calcular Longitud" class="mt-2 button bg-purple-lightest border-purple purple focus-purple">
            </form>
        </div>
    </div>
    <div class="card m-5">
        <div class="card-body text-center">
            <form action="" method="post">
                <h1>Convertidor de Volumen</h1>
                <input id="numero" type="number" name="numero2" required placeholder="Ingrese cantidad en litros" class="input focus-indigo border-indigo indigo ph-indigo-lighter"><br><br>
                <input type="radio" name="vol" value="dec"> Decilitros
                <input type="radio" name="vol" value="mil"> Mililitros
                <br>
                <?php
                if ($datosV != null) {
                    echo $datosV;
                }
                ?><br>
                <input type="submit" name="convertV" value="Calcular Volumen" class="mt-2 button bg-purple-lightest border-purple purple focus-purple">
            </form>
        </div>
    </div>
    <div class="card m-5">
        <div class="card-body text-center">
            <form action="" method="post">
                <h1>Convertidor de Masa</h1>
                <input id="numero" type="number" name="numero3" placeholder="Ingrese cantidad en kilos" class="input focus-indigo border-indigo indigo ph-indigo-lighter"><br><br>
                <input type="radio" name="masa" value="mg"> Miligramos
                <input type="radio" name="masa" value="gm"> Gramos
                <br>
                <?php
                if ($datosM != null) {
                    echo $datosM;
                }
                ?><br>
                <input type="submit" name="convertM" value="Calcular Masa" class="mt-2 button bg-purple-lightest border-purple purple focus-purple">
            </form>
        </div>
    </div>

</div>


<!-- <body>
    <h1><center>CALIFICACIONES</center></h1>
    <center>
        <form action="controlador/controlador.php" method="post">
            <label for=""></label>





        </form>
    </center> -->
</body>

</html>