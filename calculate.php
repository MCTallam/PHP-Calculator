<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : null;
    $operation = $_POST['operation'];
    $result = '';

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error! Division by zero.";
            }
            break;
        case "exponent":
            $result = pow($num1, $num2);
            break;
        case "percentage":
            if ($num2 != null) {
                $result = ($num1 / $num2) * 100 . "%";
            } else {
                $result = "Error! Second number required for percentage.";
            }
            break;
        case "sqrt":
            $result = sqrt($num1);
            break;
        case "log":
            $result = log($num1);
            break;
        default:
            $result = "Invalid Operation.";
            break;
    }
    echo "<h1>Result: $result</h1>";
    echo '<a href="index.html">Go back</a>';
}
?>
