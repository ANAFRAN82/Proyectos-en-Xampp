<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estiloEj.css">
</head>
<body>
    <h1>Enviar a un mismo formulario</h1>
    <form action="formulario2.php" method ="post">
        <input type="text" placeholder="Nombre" name="txtNombre">
        <input type="number" placeholder="Edad" name="txtEdad">
        <button type="submit">Registrar</button>
    </form>
    <?php
    if(isset($_POST['txtNombre']) and isset($_POST['txtEdad'])){
        $nombre = $_POST['txtNombre'];
        $edad = $_POST['txtEdad'];

        echo "Nombre: $nombre <br>Edad: $edad";
    }
    
    ?>
    
</body>
</html>