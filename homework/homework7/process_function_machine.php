<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Function Machine</title>
    </head>
    <body>
        <form id="function_machine" method="GET" action="process_function_machine.php">
            <label for="num1">Please enter a number:</label>
            <input type="number" name="num1" placeholder="Number 1">
            <br>
            
                    <label for="operator"></label>
                      <select id="operator" name="operator">
                        <option value="none">Please Select   </option>
                        <option value="add">add (+)          </option>
                        <option value="subtract">subtract (-)</option>
                        <option value="multiply">multiply (*)</option>
                        <option value="divide">divide (/)    </option>
                      </select>
            <br>
            
            <label for="num2">Please enter a number:</label>
            <input type="number" name="num2" placeholder="Number 2">
            <br>
            <button type="submit" name="submit" class="btn" value="enter">Calculate</button>
        </form>
        
        
<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

function calculate($first_number, $second_number, $operator) {
    
    switch($operator) {
        case 'add':
            $num1 + $num2 = $result;
            return "$result";
            break;
            
        case 'subtract':
            $num1 - $num2 = $result;
            return "$result";
            break;
            
        case 'multiply':
            $num1 * $num2 = $result;
            return "$result";
            break;
            
        case 'divide':
            $num1 / $num2 = $result;
            return "$result";
            break;
            
        default:
            $result = "Error";
            break;
            
        
    }
    
}

       
echo "Your calculations are: " . calculate($num1, $num2, $operator);   
//I tried adding $result in there too. It didn't work.
?>

    </body>
</html>


