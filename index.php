<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>

<body>
    <form action="">
        <input type="text" name="num1" placeholder="Number 1">
        <select name="operator" id="">
            <option value="none"></option>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="num2" placeholder="Number 2">
        <button type="submit" name="submit" value="submit">=</button>
        <?php
        if (isset($_GET['submit'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "none":
                    echo "You need to select an operator!";
                    break;
                case "add":
                    echo $num1 + $num2;
                    break;
                case "subtract":
                    echo $num1 - $num2;
                    break;
                case "multiply":
                    echo $num1 * $num2;
                    break;
                case "divide":
                    echo $num1 / $num2;
                    break;
            }
        }
        ?>
    </form>
</body>

</html>