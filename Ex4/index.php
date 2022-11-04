<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Exercicio 4</title>
</head>

<body>

    <form action="index.php" method="POST">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Número um</span>
            <input type="number" aria-label="Username" aria-describedby="basic-addon1" name="numero1">
        </div>
        <div class="input-group mb-3 col-3 ">
            <span class="input-group-text" id="basic-addon2">Número dois</span>
            <input type="number" aria-label="Username" aria-describedby="basic-addon2" name="numero2">
        </div>
        <div class="input-group mb-3 col-3 ">
            <span class="input-group-text" id="basic-addon2">Número três</span>
            <input type="number" aria-label="Username" aria-describedby="basic-addon2" name="numero3">
        </div>

        <div class="d-inline-flex p-2">
            <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
        </div>

        <?php
        if(isset($_POST['calcular'])){
            $A = $_POST['numero1'];
            $B = $_POST['numero2'];
            $C = $_POST['numero3'];

            $delta = sqrt(pow($B,2) - (4*$A*$C));

            if($delta>0){
                $x1 = (-$B + $delta)/(2*$A);
                $x2 = (-$B - $delta)/(2*$A);
                echo "X1: $x1 <br> X2: $x2";
            } else {
                echo "Delta negativo";
            }
        }
        ?>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</body>

</html>