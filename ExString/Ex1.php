<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>String</title>
</head>

<body>
    <form action="Ex1.php" method="POST" class="mt-5 mx-5 grid text-center">
        <div class="row border-bottom p-4">
            <div class="col border-bottom p-4 mx-2 shadow p-3 mb-5 bg-body rounded">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Palavra</span>
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
            echo "<br>$resultado";
        }
        ?>
            </div>

            <div class="col border-bottom p-4 mx-2 shadow p-3 mb-5 bg-body rounded">
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
            </div>

            <div class="col border-bottom p-4 mx-2 shadow p-3 mb-5 bg-body rounded">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Digite uma data</span>
                    <input type="date" aria-label="Username" aria-describedby="basic-addon1" name="string3">
                </div>
                <div class="d-inline-flex p-2">
                    <button type="submit" class="btn btn-primary" name="executar3">Separar datas</button>
                </div>

                <?php
        if(isset($_POST['executar3'])){
            $palavra = $_POST['string3'];
            echo "<br>Data: $palavra";
            $resultado = substr($palavra, 0, 4);
            echo "<br>Ano: $resultado";
            $resultado = substr($palavra, 5, 2);
            echo "<br>Mês: $resultado";
            $resultado = substr($palavra, 8, 2);
            echo "<br>Dia: $resultado";
        }
        ?>
            </div>
        </div>
        <div class="row border-bottom p-4">
            <div class="col border-bottom p-4 mx-2 shadow p-3 mb-5 bg-body rounded">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Digite uma data</span>
                    <input type="date" aria-label="Username" aria-describedby="basic-addon1" name="string4">
                </div>
                <div class="d-inline-flex p-2">
                    <button type="submit" class="btn btn-primary" name="executar4">Passar para português</button>
                </div>

                <?php
        if(isset($_POST['executar4'])){
            $palavra = $_POST['string4'];
            echo "<br>Data: $palavra";
            $dia = substr($palavra, 8, 2);
            $mes = substr($palavra, 5, 2);
            $ano = substr($palavra, 0, 4);
            echo "<br>$dia/$mes/$ano";
        }
        ?>
            </div>
            <div class="col border-bottom p-4 mx-2 shadow p-3 mb-5 bg-body rounded">

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Uma palavra</span>
                    <input type="text" aria-label="Username" aria-describedby="basic-addon1" name="string5">
                </div>
                <div class="d-inline-flex p-2">
                    <button type="submit" class="btn btn-primary" name="executar5">Inverter</button>
                </div>

                <?php
        if(isset($_POST['executar5'])){
            $palavra = $_POST['string5'];
            $resultado = strrev($palavra);
            echo "<br>$resultado";
        }
        ?>
            </div>
            <div class="col border-bottom p-4 mx-2 shadow p-3 mb-5 bg-body rounded">

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Digite um link</span>
                    <input type="text" aria-label="Username" aria-describedby="basic-addon1" name="string6">
                </div>
                <div class="d-inline-flex p-2">
                    <button type="submit" class="btn btn-primary" name="executar6">Inverter</button>
                </div>


                <?php
        if(isset($_POST['executar6'])){
            $palavra = $_POST['string6'];
            $link = strrev($palavra);
            echo "<a href='https://$link' target='_blank'>$link</a>";
        }
        ?>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>