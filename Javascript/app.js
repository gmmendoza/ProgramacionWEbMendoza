let contador = 0;


const numero = document.getElementById("num");
const boton = document.getElementById("contar");

boton.onclick = function(){
    contador++;
    
    numero.innerHTML = contador;
}


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <style>
        .error {
            color: red;
        }
    </style>
    <title>Formularios</title>
</head>
<body>
    <div class="container">
        <h2> Formulario de Registro</h2>
        <form id="formulario">
            *Completar los campos con sus datos 
            <br>
            
            Nombre: <input type="text" name="nombre" id=" nombre">
            
            <br>
            Contraseña: <input type="text" name="contra" id="contra">
            <br>
            Correo: <input type="email" name="email" id="email">
            <br>
        </form>
        <div class="container">
            <br>
            <button type="submit">Enviar</button>
        </div>
    </div>
    <script>
        document.getElementById('formulario').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevenir el envío del formulario 
        const nombre = document.getElementById("nombre").value;
        const contra = document.getElementById("contra").value;
        const email = document.getElementById("email").value;

        btn.onclick = function(){
            if(nombre ===''){
                alert('Falta Ingresar su nombre');
            if(contra = "");
                alert("Falta Ingresar contraseña");
            if(email="");
                alert("Falta ingresar correo");
            
        }else{
                
                alert('Su formulario se envio correctamente')
            }
        }
        });

    </script>
</body>
</html>