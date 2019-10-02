<!DOCTYPE html>
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
                    <th><td colspan="3"><h2>The 15 Most Populous Cities as of July 1, 2017</h2></td></th>
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
                    'New York, New York' => 8622698,
                    'Los Angeles, California' => 3999759,
                    'Chicago, Illinois' => 2716450,
                    'Houston, Texas' => 2312717,
                    'Phoenix, Arizona' => 1626078,
                    'Philadelphia, Pennsylvania' => 1580863,
                    'San Antonio, Texas' => 1511946,
                    'San Diego, California' => 1419516,
                    'Dallas, Texas' => 1341075,
                    'San Jose, California' => 1035317,
                    'Austin, Texas' => 950715,
                    'Jacksonville, Florida' => 892062,
                    'San Francisco' => 884363,
                    'Columbus' => 879170,
                    'Fort Worth' => 874168
                    );
                    
                $i = 0;
            
                    foreach($city_population as $key => $value ){
                    $i++;
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$key</td>";
                    echo "<td>" . number_format($value) . "</td>";
                    echo "</tr>";
                }   
            
                ?>
            </tbody>
        </table>
        <table border="0" cellspacing="3"
        cellpadding="3" align="center">
            <thead>
                <tr>
                    <th><td colspan="3"><h2>The 15 Most Populous Cities as of July 1, 2017</h2></td></th>
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
                    'New York, New York' => 8622698,
                    'Los Angeles, California' => 3999759,
                    'Chicago, Illinois' => 2716450,
                    'Houston, Texas' => 2312717,
                    'Phoenix, Arizona' => 1626078,
                    'Philadelphia, Pennsylvania' => 1580863,
                    'San Antonio, Texas' => 1511946,
                    'San Diego, California' => 1419516,
                    'Dallas, Texas' => 1341075,
                    'San Jose, California' => 1035317,
                    'Austin, Texas' => 950715,
                    'Jacksonville, Florida' => 892062,
                    'San Francisco' => 884363,
                    'Columbus' => 879170,
                    'Fort Worth' => 874168
                    );
                    
                $i = 0;
                ksort($city_population);
            
                    foreach($city_population as $key => $value ){
                    $i++;
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$key</td>";
                    echo "<td>" . number_format($value) . "</td>";
                    echo "</tr>";
                }   
            
                ?>
            </tbody>
        </table>
        <h1>Quote Page <a href="quote.html">Go Back</quote></a>
    </body>
</html>

