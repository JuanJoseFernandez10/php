<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];
        $num4 = $_GET["num4"];

        $boton = $dom->getElemntById('botonEnv');

        $num_contr1 = random_int(0,9);
        $num_contr2 = random_int(0,9);
        $num_contr3 = random_int(0,9);
        $num_contr4 = random_int(0,9);
        echo "<table><tr>";

        if($num1 == $num_contr1){
            echo "<td>" . $num1 . "</td>";   
        }else{
            echo "<td>*</td>";
        }
        if($num2 == $num_contr2){
            echo "<td>" . $num2 . "</td>"; 
        }else{
            echo "<td>*</td>";
        }
        if($num3 == $num_contr3){
        echo "<td>" . $num3 . "</td>"; 
        }else{
            echo "<td>*</td>";
        }
        if($num4 == $num_contr4){
            echo "<td>" . $num4 . "</td>"; 
        }else{
            echo "<td>*</td>";
        }
        echo "</tr></table>";
    ?>
</body>
</html>
