<?php 

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

switch (get_post_action('multiplicacao', 'subtracao', 'soma', 'divisao')) {
    case 'soma':
        $resultado = $numero1 + $numero2;
        break;

    case 'multiplicacao':
        $resultado = $numero1 * $numero2;
        break;

    case 'divisao':
        $resultado = $numero1 / $numero2;
        break;

    case 'subtracao':
        $resultado = $numero1 - $numero2;
        break;

    default:
        $resultado = 0;
}
function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}
echo "$resultado";

?>