<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Function Machine</title>
    </head>
    <body>
        <form id="function_machine" method="POST" action="process_function_machine.php">
            <label for="num1">Please enter a number:</label>
            <input type="text" name="num1" placeholder="Number 1">
            <br>
            
            <label for="operator"></label> 
                      <select id="operator" name="operator">
                        <option value="none">Please Select</option>
                        <option value="add">add (+)</option>
                        <option value="subtract">subtract (-)</option>
                        <option value="multiply">multiply (*)</option>
                        <option value="divide">divide (/)</option>
                      </select>
            <br>
            
            <label for="num2">Please enter a number:</label>
            <input type="text" name="num2" placeholder="Number 2">
            <br>
            <button type="submit" name="submit" value="enter">Calculate</button>
        </form>
        
        
<?php
function calculate() {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    switch($_POST['operator']) {
        case "Add":
            $num1 + $num2 = $sum;
            echo $sum;
            break;
            
        case "Subtract":
            $num1 - $num2 = $diff;
            echo $diff;
            break;
            
        case "Multiply":
            $num1 * $num2 = $prod;
            echo $prod;
            break;
            
        case "Divide":
            $num1 / $num2 = $quo;
            echo $quo;
            break;
        
        default:
            echo "Please go back and fill in your numbers.";
    }
}
    echo "Your calculations are: " . calculate();
?>
    </body>
</html>










