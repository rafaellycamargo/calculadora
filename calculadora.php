     <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $oper = $_POST["oper"];
            $resultado = 0;

            if ($oper == "adi") {
                $resultado = $num1 + $num2;
                echo "<h2>Resultado = $resultado<h2>";
            }
            else if ($oper == "sub") {
                $resultado = $num1 - $num2;
                echo "<h2>Resultado = $resultado<h2>";
            }
            else if ($oper == "mult") {
                $resultado = $num1 * $num2;
                echo "<h2>Resultado = $resultado<h2>";
            }
            else if ($oper == "div") {
                $resultado = $num1 / $num2;
                echo "<h2>Resultado = $resultado<h2>";
            }
        ?>
