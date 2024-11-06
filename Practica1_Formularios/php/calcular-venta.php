<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburguesa "El Náufrago"</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #FFD54F, #FF6B6B);
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .ticket {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 400px; /* Ancho del recuadro */
            height: 200px; /* Aumenta la altura */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 28px; /* Tamaño de fuente reducido */
            color: #FF6B6B;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #333;
            margin: 5px 0;
        }

        .total {
            font-size: 24px;
            color: #333;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <h1>Hamburguesa "El Náufrago"</h1>
        <h2>.::Ticket de Compra::.</h2>
        <?php
            $tipoHam = $_POST['cmbTipoHam'];
            $cantidad = $_POST['txtCantidad'];
            $tipoPago = $_POST['cmbTipoPago'];
            $totalPagar = 0;

            switch ($tipoHam) {
                case "sencilla":
                    $totalPagar = $cantidad * 25;
                    break;
                case "doble":
                    $totalPagar = $cantidad * 30;
                    break;
                case "triple":
                    $totalPagar = $cantidad * 35;
                    break;
            }
            if ($tipoPago == "tarjeta") {
                $totalPagar = $totalPagar * 1.05;
            }

            echo "<p>Tipo de Hamburguesa: " . $tipoHam . "</p>" .
                "<p>Cantidad: " . $cantidad . "</p>" .
                "<p>Tipo de Pago: " . $tipoPago . "</p>" .
                "<p class='total'>Total a Pagar: $" . number_format($totalPagar, 2) . "</p>";
        ?>
    </div>
</body>
</html>

