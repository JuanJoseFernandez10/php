<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            margin: 10% 45%;
        }
    </style>
</head>
<body>
    <div>
    <?php
        if(isset($_GET['num'])){
            $numero = $_GET["num"];
            echo "<h2>Tabla del " . $num . "</h2>";
            echo "<table style='border:2px solid black;'>";
                for($i = 0; $i <= 10; $i++){
                    echo "<tr><td>" . $numero . " * " . $i . " = " . ($numero * $i) . "</td></tr>";
                }
            echo "</table>";
        }else{
            echo "<h1 style='color: red;'>No has enviado ningun numero</h1>";
        }
    ?>
    </div>
</body>
</html>