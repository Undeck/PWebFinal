<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css">
    <title>ICO</title>
</head>
<body>
    <form action="" method="post">
        <div class="ventana"> 
            <br>
            <label for="nombre">Nombre</label> <br>
            <input type="text" name="nombre" class="tamaño" required placeholder="Ingresa tu Nombre">     

            <br><br>
            <label for="usuario">Usuario</label> <br>
            <input type="text" name="usuario" class="tamaño" required placeholder="Ingresa tu Usuario">    

            <br><br>
            <label for="no_cuenta">No Cuenta</label> <br>
            <input type="text" name="no_cuenta" class="tamaño" required placeholder="Ingresa tu No Cuenta">    

            <br><br>
            <label for="email">Email</label> <br>
            <input type="text" name="email" class="tamaño" required placeholder="Ingresa tu Email">    

            <br><br>
            <label for="contraseña">Contraseña</label> <br>
            <input type="text" name="contraseña" class="tamaño" required placeholder="Contraseña">    

            <br><br>
            <label for="numero">Numero</label> <br>
            <input type="text" name="numero" class="tamaño" required placeholder="Ingresa tu Numero">    

            <br><br>
            <button>Enviar</button>
            <button type="button" onclick="limpiarCampos()">Vaciar</button> <!-- Nuevo botón Vaciar -->
            <br><br>
        </div>
    </form>

    <script>
        function limpiarCampos() {
            // Obtener todos los elementos de formulario y restablecer su valor
            var elementosFormulario = document.forms[0].elements;
            for (var i = 0; i < elementosFormulario.length; i++) {
                elementosFormulario[i].value = "";
            }
        }
    </script>
</body>
</html>
