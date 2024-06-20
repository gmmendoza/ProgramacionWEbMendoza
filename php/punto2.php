<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Primo</title>
    <style>
        h2 {
            color: #0000ff;
            text-align: center;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff;
            margin: 0;
        }

        .container {
            text-align: center;
            width: 100%;
            max-width: 600px;
            padding: 20px;

        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: lightblue;
        }

        table,
        th,
        td {
            border: 1px solid blue;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            color: darkblue;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tabla de numeros Primos</h2>
        <form method="post">
            <label for="num">Ingresar el numero: </label>
            <input type="number" id="num" name="num" required>
            <button type="submit">Crear tabla</button>

        </form>

        <?php

        function primo($num)
        {
            if ($num < 2) {
                return false;
            }
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = intval($_POST["num"]);
            $primos = [];
            $contador = 0;
            $actual = $num + 1;

            while ($contador < 16) {
                if (primo($actual)) {
                    $primos[] = $actual;
                    $contador++;
                }
                $actual++;
            }

            echo "Los primeros 16 números primos desde $num son:<br>";
            echo "<table>";
            for ($i = 0; $i < 4; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 4; $j++) {
                    echo "<td>" . $primos[$i + $j * 4] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>

</html>