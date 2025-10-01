<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
        table{
            border: 2px dotted darkblue;
        }
    </style>
</head>
<body>
    <?php
        echo "<table>";
        for($i = 0; $i <= 100; $i++){
            if($i % 5 == 0){
                echo"<tr>";
                echo "<td>" . $i . " es multiplo de 5</br></td>";
                echo"</tr>";
            }
        } 
        echo "</table>";
    ?>
</body>
</html>