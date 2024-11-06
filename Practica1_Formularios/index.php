<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios HTML con PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
    
</head>
<body>
    <section class="content-form">
    <h1>.::HAMBURGUESAS EL NAUFRAGO::.</h1>
    <form action="php/calcular-venta.php" method="post">
        <select name="cmbTipoHam">
            <option value="no selecciono">--Tipo de Hamburguesa--</option>
            <option value="sencilla">Sencilla......$25.00</option>
            <option value="doble">Doble.........$30.00</option>
            <option value="triple">Triple.........$35.00</option>
        </select>
        <input name="txtCantidad" type="number" placeholder="Cantidad a comprar">
        <select size="1" name="cmbTipoPago">
            <option value="no selecciono">--Tipo Pago--</option>
            <option value="efectivo">Efectivo</option>
            <option value="tarjeta">Tarjeta</option>
        </select>

        <section>
        <button type="submit">Calcular Compra</button>
        <button type="reset">Nueva Compra</button>
        </section>

    </form>
    </section>
    <a href="ejemplo.php?nombre=tesji&carrera=sistemas">Ir a la pagina 2</a>
    <br>
    <a href ="formulario2.php">Ir a Enviar datos a un mismo formulario</a>
</body>
</html>
