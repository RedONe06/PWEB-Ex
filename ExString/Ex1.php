<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>String</title>
</head>

<body>
    <form action="Ex1.php" method="POST">

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"></span>
            <input type="text" aria-label="Username" aria-describedby="basic-addon1" name="string_um">
        </div>

        <div class="d-inline-flex p-2">
            <button type="submit" class="btn btn-primary" name="executar1">Calcular tamanho da palavra</button>
        </div>

        <?php
        if(isset($_POST['executar1'])){
            $palavra = $_POST['string_um'];
            $palavra = str_split($palavra);
            $resultado = count($palavra);
            echo "$resultado";
        }
        ?>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Digite seu CEP</span>
            <input type="text" aria-label="Username" aria-describedby="basic-addon1" name="string2">
        </div>

        <div class="d-inline-flex p-2">
            <button type="submit" class="btn btn-primary" name="executar2">Extrair 3 últimos algarismos</button>
        </div>

        <?php
        if(isset($_POST['executar2'])){
            $palavra = $_POST['string2'];
            $resultado = substr($palavra, -3);
            echo "$resultado";
        }
        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>