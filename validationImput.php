<?php




$options = array(
    'options' => array(
        'min_range' => 0,
        1,
        'max_range' => 5,
        0
    )
);

if (($one == 0) || ($two == 0) || ($three == 0)) {

    echo "$one . $two . $three
    <h1>ESTA VACIO O TIENE UN 0</h1>
    <h1>RECUERDA LLENAR EL VALOR Y QUE ES DE 0.1 A 5</h1>";
} else {

    if (filter_var($one, FILTER_VALIDATE_FLOAT, $options) && filter_var($two, FILTER_VALIDATE_FLOAT, $options) && filter_var($three, FILTER_VALIDATE_FLOAT, $options) !== false) {

        $promedio = (float) ($one + $two + $three) / 3;
        $redo = (float) round($promedio, 1, PHP_ROUND_HALF_UP);
        echo "<h1>$redo<h1>";
        if ($promedio <= 3.9) {
            echo "creo que estudiar no te iria mal<br>";
        } else {
            echo "muy bien hecho, logras tu beca<br>";
        }



    } else {
        echo "<h1>TU NOTA ES DE 0,1 A 5</h1>
        <h1>NO PUEDES AGREGAR ESA NOTA</h1>";
    }
}

?>