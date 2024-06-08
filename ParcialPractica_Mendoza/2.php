<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Punto 2</title>
</head>

<body>
    <?php
        $value = 50;
        $for = range(1, 100);
        $salida = array();
        for ($i = 0; $i < $for; $i++)
            foreach ($for as $value) {
                $salida[] = $value;
            }
        print_r($salida);
    ?>
</body>

</html>

//Comentarios
* No debe de ir el "indice" $salida[indice]=$value;
* Se agrego un contador

