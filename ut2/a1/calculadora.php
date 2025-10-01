<h1>Calculadora en entorno nativo</h1>
<form method="post" action="">
        <p>Valor 1: <input type="number" id="num1" name="num1"></p>
        <p>Valor 2: <input type="number" name="num2"></p>
        <p>Operación:
                <select name="operacion">
                        <option>Suma</option>
                        <option>Resta</option>
                        <option>Multiplicación</option>
                        <option>División</option>
                </select>
        <p>
        <button type="submit">Calcular</button>
</form>
<?php
        switch($_POST["operacion"]) {
        case "Suma":
                $result = $_POST["num1"] + $_POST["num2"];
                echo $result;
                break;
        case "Resta":
                $result = $_POST["num1"] - $_POST["num2"];
                echo $result;
                break;
        case "Multiplicación":
                $result = $_POST["num1"] * $_POST["num2"];
                echo $result;
                break;
        case "División":
                if ($_POST["num2"] == 0) {
                        $result = "No se puede dividir entre 0";
                } else {
                        $result = $_POST["num1"] / $_POST["num2"];
                }
                echo $result;
                break;
        }
?>
