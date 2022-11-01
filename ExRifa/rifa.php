<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Rifa</title>
</head>

<body>

    <div class="container text-center mt-5">
        <div class="row justify-content-md-center">
                <?php
                $item = $_POST['item'];
                $data = $_POST['data'];
                $valor = $_POST['valor'];
                $numero = $_POST['quantidade'];

                echo "
                <div class='col col-lg-2 border text-sm-start p-4'>
                <strong>Nome</strong>
                <br>
                <br>
                <br>
                <br>
                <strong>Endereço</strong>
                <br>
                <br>
                <br>
                <br>
                
            </div>

            <div class='col border p-4'>
              <h3>AÇÃO ENTRE AMIGOS</h3>
              <p>Prêmio: $item</p>
              <p>Data: $data</p>
              <p>Valor: $valor</p>
              <p>Nº: $numero</p>
            </div>"
            ?>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
</body>

</html>