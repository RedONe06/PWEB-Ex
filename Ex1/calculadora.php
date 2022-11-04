<?php 

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

if(isset($_POST["mu"])){
    $resultado = $numero1 * $numero2;
} else if(isset($_POST["d"])){
    $resultado = $numero1 / $numero2;
} else if(isset($_POST["so"])){
    $resultado = $numero1 + $numero2;
} else if(isset($_POST["su"])){
    $resultado = $numero1 - $numero2;
}

echo "$resultado";

?>