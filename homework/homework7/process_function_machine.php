<?php
 if (isset($_POST['num1'])) {
    $num1 = $_POST['num1'];
}

    if (isset($_POST['num2'])) {
    $num2 = $_POST['num2'];
}

    if (isset($_POST['operator'])) {
    $operator = $_POST['operator'];
}

 function calculate($a = 0, $b = 0)
 {
 return ($a + $b);
 }

?>
<!doctype HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Function Machine</title>
    </head>
    <body>
        <form action="process_function_machine.php" method="POST">
            <label id="num1">Please enter a number:</label>
            <input type="text" name="num1" value="0" placeholder="Number 1">
            <br>


                      <select id="operator" name="operator" value="operator">
                        <option label="">Please Select</option>
                        <option label="add">add (+)</option>
                        <option label="subtract">subtract (-)</option>
                        <option label="multiply">multiply (*)</option>
                        <option label="divide">divide (/)</option>
                      </select>
            <br>

            <label id="num2">Please enter a number:</label>
            <input type="text" name="num2" value="0" placeholder="Number 2">
            <br>
            <input type="submit" value="Calculate">
        </form>


<?php


if (!empty($num1) && !empty($num2) && !empty($operator)) {

    switch($operator) {
        case 'add':
            echo $num1 . " + " . $num2 . " = ";
            echo calculate($num1+$num2);
            break;

        case 'subtract':
            echo $num1 . " - " . $num2 . " = ";
            echo calculate($num1-$num2);
            break;


        case 'multiply':
            echo $num1 . " * " . $num2 . " = ";
            echo calculate($num1*$num2);
            break;


        case 'divide':
            echo $num1 . " / " . $num2 . " = ";
            echo calculate($num1/$num2);
            break;

    }
    }

    else {
        echo "Please enter a number.";
    }

?>

    </body>
</html>


