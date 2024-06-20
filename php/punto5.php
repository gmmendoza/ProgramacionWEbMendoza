<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversicion de numeros</title>
    <style>
        h1 {
            color:#007BFF;
        }
        .container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        label {
            display: block;
            margin-bottom:10px;
            font-weight: bold;
        }
        form {
            margin-top:20px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2em;
        }
        .error {
            color:red;
            font-weight: bold;
        }
        button {
            color: #fff;
            background-color: #007BFF;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Conversion de numero</h1>
        <form action="" method="post">
            <label for="num">Ingresar numero binario: </label>
            <input type="text" id="num" name="num" required>
            <button type="submit">Conventir</button>
        </form>
    </div>
    <?php 
        if(isset($_POST["num"])) { 
            $numb = $_POST["num"];
            if(!preg_match("/^[01]+$/", $numb)) {
                echo "<p class='error'> Numero invalido.</p>";
            } else {
                $numd = bindec($numb);
                $numhexa = dechex($numd);
                echo "<p class='result'>El numero en decimal es: $numd</p>";
                echo "<p class='result'>El numero en hexadecimal es: 0x$numhexa</p>";
            }
        }
    ?>
</body>
</html>