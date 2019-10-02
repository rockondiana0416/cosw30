<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Quote</title>
    </head>
    <body>
<?php

// Store the string from the form in a variable
// Convert the string into an array (explode) 
     $text = $_POST['text']; 
        echo "This is your quote: $text<br>";
     
     $textExplode = explode(' ', $text); //converts string to array
        print_r ($textExplode);
        
// Output the original array (foreach) and a count of how many words are in the array (count)
     $i = 0;
        $num = count($textExplode); {
            foreach($textExplode as $key => $value ) {
                $i++;
                echo "<br>$key - $value<br> ";
                }   
        }
            
// Sort the array alphabetically (sort)
// Output the sorted array (foreach)
    $i = 0;    
        $quote = sort($textExplode); {
            foreach($textExplode as $key => $value) {
                $i++;
                echo "$key - $value, ";
            }
        }

// Reverse sort the array (rsort)
// Output the reverse sorted array (foreach)
    $i = 0;    
        $quote = rsort($textExplode); {
            foreach($textExplode as $key => $value) {
                $i++;
                echo "<br>$key - $value ";
            }
        }

// Add three words to the array (array_push)
// Output the array (foreach) and a count of how many words are in the array (count)
    $i = 0;
        array_push($textExplode,"happy","glad","sad"); {
            foreach($textExplode as $key => $value) {
                $i++;
                echo "<br>$key - $value<br> ";
            }
    }

// Remove the first three words of the array (array_splice)
// Output the array (foreach) and a count of how many words are in the array (count)
    $i = 0;
        $new_quote = array_splice($textExplode, 3); {
            foreach($new_quote as $key => $value) {
                $i++;
                echo "$value - $key, ";
            }
    }
?>

<h1>Do you want to try again? <a href="quote.html">Go Back</quote></a>
<h1>Also check out the population of <a href="population.php">US Cities</a></h1>
    </body>
</html>


