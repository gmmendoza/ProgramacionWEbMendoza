<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <style>
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

        h2 {
            color: #0000ff;
            text-align: center;
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
<div class="container">
    <h2>Tabla de Multiplicar</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num">Ingresar el numero: </label>
        <input type="number" id="num" name="num" min="1" max="9" required>
        <button type="submit">Multiplicar</button>

    </form>


    </form>
    <?php
    function validar($num)
    {
        return ($num >= 1 && $num <= 9);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];

        if (validar($num)) {

            echo "<h4>Tabla de multiplicar numero $num </h4>";
            echo "<table>";
            echo "<tr><th></th><th>Resultado</th></tr>";
            $j = 1;
            while ($j <= 10) {
                $multiplicacion = $num * $j;
                echo "<tr><td>$num X $j</td><td>$multiplicacion</td></tr>";
                $j++;
            }
            echo "</table>";
        } else {
            echo "<h3>Ingresar un numero valido comprendido entre el 1 y 9.</h3>";
        }
    }
    ?>
</div>
</body>

</html>