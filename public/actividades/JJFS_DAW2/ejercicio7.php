<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <form action="ejercicio7.php" method="get">
        <table>
            <tr>
                <td><input type="number" name="num1"  min="0" max="9"></td>
                <td><input type="number" name="num2"  min="0" max="9"></td>
                <td><input type="number" name="num3"  min="0" max="9"></td>
                <td><input type="number" name="num4"  min="0" max="9"></td>
            </tr>
        </table>
        <button type="submit" id="botonEnv" <?php if($allTrue) echo "disabled" ?>>Enviar</button><br>
        
    </form>
    <br><br>
    <?php
        session_start();

        if(!isset($_SESSION['intentos'])){
            $_SESSION['intentos'] = 0;
        }
        echo $_SESSION['intentos'];
        if($_SESSION['intentos'] >= 4){
            echo "<h3 style='color: yellow;'>Has agotado los intentos, acceso bloqueado</h3>";
            echo "<form method='GET'> <button type='submit' name='btnReset'> Reiniciar </button> </form>";
            if(isset($_GET['btnReset'])){
                $_SESSION['intentos'] = 0;
            }
        }else{
            $esValido = false;
            if(isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["num3"]) && isset($_GET["num4"])){
                $num1 = $_GET["num1"];
                $num2 = $_GET["num2"];
                $num3 = $_GET["num3"];
                $num4 = $_GET["num4"];
                $contr_user = [$num1, $num2, $num3, $num4];
                echo "<h2>Numeros contraseña introducidos: </h2>";
                echo "<h3>";
                foreach($contr_user as $contr){
                    echo "- " . $contr;
                }
                echo "</h3>";
                $esValido = true;
            }
            if($esValido){
                $contraseña = [4, 3, 6, 9];
                $acierto = [false, false, false, false];

                echo "<table><tr>";
                for($i = 0; $i < count($contraseña); $i++){
                    if($contr_user[$i] == $contraseña[$i]){
                        echo "<td>" . $contraseña[$i] . "</td>";
                        $acierto[$i] = true;
                    }else{
                        echo "<td> * </td>";
                        $acierto[$i] = false;
                    }
                }
                echo "</tr></table>";

                $allTrue = false;
                foreach ($acierto as $v) {
                    if ($v) {
                        $allTrue = true;
                        break;
                    }
                }
                if($allTrue){
                    echo "<h1> Has acertado </h1>";
                }else{
                $_SESSION['intentos']++;
                }
            }else{
                if($_SESSION['intentos'] > 0){
                echo "<h1 style='color: red;'> Debes introducir un numero</h1>";
                }
            }
        }
    ?>
</body>
</html>
