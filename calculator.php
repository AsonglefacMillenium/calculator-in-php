<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="">
    <input type="text" name="num1" placeholder="Enter first number">
    <input type="text" name="num2" placeholder="Enter second number">
    <select name="operator" id="">
    <option value="">
    None
    </option>

    <option value="">Add</option>
    <option value="">Subtract</option>
    <option value="">Multiply</option>
    <option value="">Divide</option>
    <option value="">Modulus</option>
    </select>

    <button type="submit" name="submit" value="submit">Calculate</button>
    
    </form>
    <p>The result is:</p>


    <?php

if (isset($_GET['submit'])){

    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch ($operator) {
        case "None":
            echo "You need to enter a number";
        break;

        case "Add":
            echo $result1 + $result2;
        break;

        case "Subtract":
            echo $result1 - $result2;
        break;
        case "Multiply":
            echo $result1 * $result2;
        break;
        case "Divide":
            echo $result1 / $result2;
        break;
        case "Modulus":
            echo $result1 % $result2;
        break;
    }
}

    ?>
</body>
</html>