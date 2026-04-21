<?php
$result = "";

if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if ($operator == "+") {
        $result = $num1 + $num2;
    } elseif ($operator == "-") {
        $result = $num1 - $num2;
    } elseif ($operator == "*") {
        $result = $num1 * $num2;
    } elseif ($operator == "/") {
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Cannot divide by zero";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>

<h2>Simple PHP Calculator</h2>

<form method="POST">
    Number 1: <input type="number" name="num1" required><br><br>
    
    Operator:
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>
    
    Number 2: <input type="number" name="num2" required><br><br>
    
    <input type="submit" name="calculate" value="Calculate">
</form>

<h3>Result: <?php echo $result; ?></h3>

</body>
</html>
