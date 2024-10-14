<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
    <?php
        
    $i = 7;

    while ($i > 1){
        if ($i % 2 == 0){
            $i = $i / 2;
            echo "El resultado es $i ";
        } else {
            $i = $i * 3 + 1;
            echo "El resultado es $i ";
        }



    }

    ?>
    


</body>
</html>