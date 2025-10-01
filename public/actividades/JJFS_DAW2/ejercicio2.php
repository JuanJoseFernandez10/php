<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i = 0;
        echo "<table>";
        while( $i <= 100){
            if($i % 5 == 0){
                echo"<tr>";
                echo "<td>" . $i . " es multiplo de 5</br></td>";
                echo"</tr>";
            }
            $i++;
        } 
        echo "</table>";
    ?>
</body>
</html>