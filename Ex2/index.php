<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Exercicio 2</title>
</head>
<body>
<form action="index.php" method="POST">
        <div class="input-group mb-3 col-3 ">
            <span class="input-group-text" id="basic-addon2">Numéro max</span>
            <input type="number" aria-label="Username" aria-describedby="basic-addon2" name="numero">
        </div>
        <div class="d-inline-flex p-2">
            <button type="submit" class="btn btn-primary" name="gerar">Gerar</button>
        </div>

        <?php
        $inicio = 1;
        if(isset($_POST['gerar'])){
            $fim = $_POST["numero"];
            while($inicio <= $fim){
                if($inicio%2 == 0){
                    echo "<h1 style='color: red'>$inicio<h1>";
                } else {
                    echo "<h1 style='color: green'>$inicio<h1>";
                }
                $inicio++;
            }
        }

        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>