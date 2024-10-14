<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
        
    $npaquetes = $_GET["npaquetes"];
    $largop = $_GET["largop"];
    $anchop = $_GET["anchop"];
    $altop = $_GET["altop"];
    $zona = $_GET["zona"];
    $transporte = $_GET["transporte"];

    $costep = 0;

    $tamanop = $largop*$anchop*$altop;

    if ($tamanop <= 0.5) {
        $costep = 50;
            } elseif ($tamanop >= 1) {
                $costep = 75;
            } elseif ($tamanop > 1) {
                $costep = 100;
            }

            echo "El precio por tamaño es $costep ";
    
    if ($tamanop > 5) {
        $costep = $costep * 0.25;
            } elseif ($tamanop > 10) {
                $costep = $costep * 0.50;
            } elseif ($tamanop > 15) {
                echo "El paquete pesa más de lo que debería se cancela el envío ";
            }      
        
            echo "El precio por peso es $costep ";

    if ($zona == "peninsula") {
        echo "No hay coste adicional ";
            } elseif ($zona == "Baleares") {
                    if ($transporte == "maritimo")
                    echo "sin coste adicional ";
                    }else {
                        if ($transporte == "aereo")
                        $costep = $costep * 0.10;
                        echo "Por ser aereo se te ha cobrado un 10% más ";
            } if ($zona == "Canarias") {
                    $costep = $costep * 0.10;
                echo "Por ser a canarías se te ha cobrado un 10% más ";
            }      
                
            echo "El precio por peso es $costep ";

    ?>
    
</body>
</html>