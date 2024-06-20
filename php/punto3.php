<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 3</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff;
            margin: 0;
        }

        h2 {
            color: #0000ff;
            text-align: center;
        }

        .container {
            text-align: center;
        }

        .negrita {
            font-weight: bold;
        }

        .resultado {
            margin-top: 20px;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Numero en Letras</h2>
        <form method="post">
            <label for="num">Ingresar el numero: </label>
            <input type="number" id="num" name="num" required>
            <button type="submit">Convertir</button>

        </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["num"]);
        echo "<div class='resultado'>";
        echo "<p>Número ingresado: <strong>$num</strong></p>";
        echo "<p>Número en letras: <span class='negrita'>" . convertir($num) . "</span></p>";
        echo "</div>";
    }
    function convertir($num)
    {
        $cifras = array(
            0 => "cero",
            1 => "uno",
            2 => "dos",
            3 => "tres",
            4 => "cuatro",
            5 => "cinco",
            6 => "seis",
            7 => "siete",
            8 => "ocho",
            9 => "nueve",
            10 => "diez",
            11 => "once",
            12 => "doce",
            13 => "trece",
            14 => "catorce",
            15 => "quince",
            16 => "dieciséis",
            17 => "diecisiete",
            18 => "dieciocho",
            19 => "diecinueve",
            20 => "veinte",
            21 => "veintiuno",
            22 => "veintidós",
            23 => "veintitrés",
            24 => "veinticuatro",
            25 => "veinticinco",
            26 => "veintiséis",
            27 => "veintisiete",
            28 => "veintiocho",
            29 => "veintinueve",
            30 => "treinta",
            40 => "cuarenta",
            50 => "cincuenta",
            60 => "sesenta",
            70 => "setenta",
            80 => "ochenta",
            90 => "noventa",
            100 => "cien",
            200 => "doscientos",
            300 => "trescientos",
            400 => "cuatrocientos",
            500 => "quinientos",
            600 => "seiscientos",
            700 => "setecientos",
            800 => "ochocientos",
            900 => "novecientos"
        );

        if ($num <= 30) {
            return $cifras[$num];
        } elseif ($num < 100) {
            $dece = intval($num / 10) * 10;
            $uni = $num % 10;
            return $uni == 0 ? $cifras[$dece] : $cifras[$dece] . " y " . $cifras[$uni];
        } elseif ($num < 1000) {
            $cent = intval($num / 100) * 100;
            $resto = $num % 100;
            return $resto == 0 ? $cifras[$cent] : $cifras[$cent] . " " . convertir($resto);
        } else {
            return "mil";
        }
    }
    ?>
    </div>
</body>

</html>