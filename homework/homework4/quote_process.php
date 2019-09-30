



<?php

// Display the original text to an array
    $text = $_POST['text'];
    print_r($text);
    
// Display the count of the total words
    $textExplode = explode(' ', $text); //converts string to array
    print_r($textExplode);

// Display the number of the words
    $num = count($textExplode);
    print_r($num);
    
    
    
    $age = array("x"=>"x_value", "shankar"=>"47", "kailash"=>"41"); 
ksort($age); 
  
foreach($age as $x => $x_value) { 
    echo "Key=" . $x . ", Value=" . $x_value; 
    echo "<br>"; 
}
die;

    
    
    
    

    $arr = explode(' ' , $text);
    ksort($array);
    foreach($arr as $array => $num) {
        echo "$num  $array"; 
}
die;


ksort($alphabet);
    
foreach (range('array') as $alphabet) {
    echo $alphabet;   
}
die;

    
    
    
    $alphabet = array();
    ksort($alphabet);
    
    foreach($value as $alphabet) {
        echo $alphabet;
    }
    die;
    
  ?>  
    
    
    $textExplode = explode(' ', $text);   
    ksort($textExplode);

foreach($text as $num => $alphabet) {
    echo $alphabet;
    echo "<br>";
}
die;

    
    
    
    
    
    
    
    ksort($alphabet);
    foreach ($alphabet as $list);
    print_r($list);
    die;



$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

    
    






// trial
     // Display the movies sorted by title:
                    ksort($list);
                    echo '<tr><td colspan="2">Sorted by title:</td></tr>';
                    
                    foreach ($list as $title => $alphabet) {
                        echo "$alphabet";
                    }
die;
     
     
    
    








$words = range('0','15');
foreach ($words as $value) {
echo "<p>$words</p><ul>";
}

foreach ($textExplode as $value) {
    echo "The value as is $value.";
}

$textExplode = explode(' ', $text); //converts string to array
    
    
    shuffle($textExplode);




?>