<?php

include 'includes/index.php'

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="">
        <p>My own calculator</p>
        <input type="number" name="number1" placeholder="first number">
        <input type="number" name="number2" placeholder="second number">
        <select name="oper" id="">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="mult">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <button type="submit" name="submit">Calculate</button>
    </form>

</body>

</html>