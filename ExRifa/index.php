<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Montador de rifa</title>
</head>

<body>
    <div class="container text-center mt-5 ">

        <h3 class="mb-3">RIFA DA FELICIDADE</h3>
        <div class="col border p-4">
            <form action="rifa.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Item da rifa</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="item">
                </div>
                <div class="input-group mb-3 col-3 ">
                    <span class="input-group-text" id="basic-addon2">Data do evento</span>
                    <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon2" name="data">
                </div>

                <div class="input-group mb-3 col-3 ">
                    <span class="input-group-text" id="basic-addon3">Quantidade N°</span>
                    <input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon3" name="quantidade">
                    <span class="input-group-text" id="basic-addon4">Valor R$</span>
                    <input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon4" name="valor">
                </div>
                <div class="d-inline-flex p-2">
                    <button type="submit" class="btn btn-primary">Gerar</button>
                </div>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>