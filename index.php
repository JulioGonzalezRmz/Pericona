<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Productos</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            box-sizing: border-box;
        }
        #top-bar {
            background-color: #4CAF50;
            height: 80px;
            width: 100%;
            color: white;
            text-align: center;
            line-height: 50px;
            padding: 15px;
        }
        #menu {
            text-align: center;
            width: 80%;
            margin: auto;
        }
        .product {
            border: 2px solid #ccc;
            display: inline-block;
            margin: 20px;
            padding: 10px;
            text-align: center;
            border-radius: 0 0 20px 20px;
            width: 12%;
        }
        img {
            width: 100px;
            height: auto;
            margin: 10px 0;
        }
        .clear {
            clear: both;
            display: block;
            content: "";
        }
    </style>
</head>
<body>
    <div id="top-bar"><h1>Menú de Productos</h1></div>
    <div id="menu">
    <?php
    // Define los productos
    $productos = [
        ['nombre' => 'Producto 1', 'precio' => '$100'],
        ['nombre' => 'Producto 2', 'precio' => '$200'],
        ['nombre' => 'Producto 3', 'precio' => '$300'],
        ['nombre' => 'Producto 4', 'precio' => '$400'],
        ['nombre' => 'Producto 5', 'precio' => '$500'],
        ['nombre' => 'Producto 6', 'precio' => '$600'],
        ['nombre' => 'Producto 7', 'precio' => '$700'],
        ['nombre' => 'Producto 8', 'precio' => '$800'],
        ['nombre' => 'Producto 9', 'precio' => '$900'],
        ['nombre' => 'Producto 10', 'precio' => '$1000'],
        ['nombre' => 'Producto 11', 'precio' => '$1100'],
        ['nombre' => 'Producto 12', 'precio' => '$1200'],
        ['nombre' => 'Producto 13', 'precio' => '$1300'],
        ['nombre' => 'Producto 14', 'precio' => '$1400'],
        ['nombre' => 'Producto 15', 'precio' => '$1500'],
        ['nombre' => 'Producto 16', 'precio' => '$1600'],
        ['nombre' => 'Producto 17', 'precio' => '$1700'],
        ['nombre' => 'Producto 18', 'precio' => '$1800'],
        ['nombre' => 'Producto 19', 'precio' => '$1900'],
        ['nombre' => 'Producto 20', 'precio' => '$2000'],
    ];

    // Contador para el salto de línea cada 5 productos
    $contador = 0;

    foreach ($productos as $producto) {
        echo '<div class="product">';
        echo '<img src="img/foto.jpeg" alt="Imagen del producto"/>';
        echo '<h3>' . $producto['nombre'] . '</h3>';
        echo '<p>' . $producto['precio'] . '</p>';
        echo '</div>';

        $contador++;
        if ($contador % 5 == 0) {
            echo '<div class="clear"></div>';
        }
    }
    ?>
    </div>
</body>
</html>


<!-- 
$productos = [
        ['nombre' => 'Producto 1', 'precio' => '$100'],
        ['nombre' => 'Producto 2', 'precio' => '$200'],
        ['nombre' => 'Producto 3', 'precio' => '$300'],
        ['nombre' => 'Producto 4', 'precio' => '$400'],
        ['nombre' => 'Producto 5', 'precio' => '$500'],
        ['nombre' => 'Producto 6', 'precio' => '$600'],
        ['nombre' => 'Producto 7', 'precio' => '$700'],
        ['nombre' => 'Producto 8', 'precio' => '$800'],
        ['nombre' => 'Producto 9', 'precio' => '$900'],
        ['nombre' => 'Producto 10', 'precio' => '$1000'],
        ['nombre' => 'Producto 11', 'precio' => '$1100'],
        ['nombre' => 'Producto 12', 'precio' => '$1200'],
        ['nombre' => 'Producto 13', 'precio' => '$1300'],
        ['nombre' => 'Producto 14', 'precio' => '$1400'],
        ['nombre' => 'Producto 15', 'precio' => '$1500'],
        ['nombre' => 'Producto 16', 'precio' => '$1600'],
        ['nombre' => 'Producto 17', 'precio' => '$1700'],
        ['nombre' => 'Producto 18', 'precio' => '$1800'],
        ['nombre' => 'Producto 19', 'precio' => '$1900'],
        ['nombre' => 'Producto 20', 'precio' => '$2000'],
        echo '<img src="img/foto.jpeg" alt="Imagen del producto"/>';
    ]; -->