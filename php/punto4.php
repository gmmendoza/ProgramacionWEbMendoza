<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descomposicion de Numeros</title>
    <style>
        body{
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

        table,
        th,
        td {
            border:1px solid black;
            text-align: center;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Descomposicion de un numero</h2>
        <form method="post">
            <label for="num">Ingresar numero que quiere descomponer: </label>
            <input type="number" id="num" name="num" required>
            <button type="submit">Descomponer</button>
        
        </form>
    </div>

    <?php 
    function descomponer($num)
    {
        $potencia = 0;
        $partes = [];

        while($num > 0){
            $cifra = $num %10;
            $posicion = obtenerPosicion($potencia);
            $partes[] = [
                'posicion' => $posicion,
                'valor' => $cifra
            ];

            $numero = (int)($num /10);
            $potencia++;
        }
        return array($partes);
    }
    function obtenerposicion($potencia){
        switch($potencia){
            case 1: 
                return "unidad";
            case 2:
                return "decena";
            case 3:
                return "centena";
            case 4:
                return "unidad de mil";
            default:
            return "posicion" .($potencia + 1);
            }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" ){
        $numing = $_POST["num"];
        if (!ctype_digit($numing) || $numing <= 0)  {
            echo"ingresar numero positivo";
        }else {
            $num = (int)$numing;
            $partesnum = descomponer($num);
            echo "<h3>Descomposicion del numero: $num</h3>";
            echo "<table>";
            echo "<tr><th>POsicion</th><th>Valor</th></tr>";
            foreach($partesnum as $parte){
                echo "<tr><td>{$parte['posicion']}</td><td>{$parte['valor']}</td></tr>";
            
            
            }
                echo"</table>";
            }
    }
    ?>
</body>
</html>