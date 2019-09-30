<!doctype <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sorting Arrays</title>
    </head>
    <body>
        <table border="0" cellspacing="3"
        cellpadding="3" align="center">
            <thead>
                <tr>
                    <th><h2>The 15 Most Populous Cities as of July 1, 2017</h2></th>
                </tr>
                
                <tr>
                    <th>Rank</th>
                    <th>City, State</th> 
                    <th>2017 Total Population</th>
                </tr>
            </thead>
            <tbody>
                <?php # Population.php
                
                // Create the array:
                $city_population = array (
                    'New York, New York' => 8,622,698,
                    'Los Angeles, California' => 3,999,759,
                    'Chicago, Illinois' => 2,716,450,
                    'Houston, Texas' => 2,312,717,
                    'Phoenix, Arizona' => 1,626,078,
                    'Philadelphia, Pennsylvania' => 1,580,863,
                    'San Antonio, Texas' => 1,511,946,
                    'San Diego, California' => 1,419,516,
                    'Dallas, Texas' => 1,341,075,
                    'San Jose, California' => 1,035,317,
                    'Austin, Texas' => 950,715,
                    'Jacksonville, Florida' => 892,062,
                    'San Francisco' => 884,363,
                    'Columbus' => 879,170,
                    'Fort Worth' => 874,168
                    );
                    
                    
                    for($i = 1; $i < 15; $i++) {
        echo "$city_population\n";
    }
                    
    die;                
              
              
              
              
              
              
              
              
              
              
              
              $i = 1;
            
            while($i <= sizeof("array")){      
            
          
            foreach($city_population as $key => $value){
            
            echo "<tr>";
            echo "<td>$i++</td>";
            echo "<td>$key</td>";
            echo "<td>" . number_format($value) . "</td>";
            echo "</tr>";
            
            
             }
            }
            
                    
                    
            
                    ?>
            </tbody>
        </table>
    </body>
</html>