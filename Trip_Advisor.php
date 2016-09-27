<!doctype html>
<!-- Created by Keon Hee Park -->
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Part 4</title>
    </head>
    <body>
        <h1><u>PHP Functions and Arrays</u></h1>
        <h2>Part 4:</h2>
        <p>According to the Trip Advisor, the 10 best Restaurants in Atlanta based up votes for 2015 are as follows:</p>
        <br>
        <p>Chama Gaucha - Average Cost $40.50
        <br>Aviva by Kameel - Average Cost $15.00
        <br>Bone's Restaurant - Average Cost $65.00
        <br>Umi Sushi Buckhead - Average Cost $40.50
        <br>Fandangles - Average Cost $30.00
        <br>Capital Grille - Average Cost $60.50
        <br>Canoe - Average Cost $35.50
        <br>One Flew South - Average Cost $21.00
        <br>Fox Bros. BBQ - Average Cost $15.00
        <br>South City Kitchen Midtown - Average Cost $29.00</p>
        
        <p>Define an array (or arrays) that holds this information about Name and Average Cost of the 10 best Restaurants in Atlanta.</p>
        <p>Print a table of the Restaurants Name and Restaurants Average Cost for all 10 Restaurants.</p>
        <p>The second part of this program is to write a functions to modify your output that to prints the result of the table ordered by price and a second function to print the resultls </p>
        
    <?php
    $Restaurant_Name_Price = array(
                        array("Chama Gaucha", 40.50),
                        array("Aviva by Kameel", 15.00),
                        array("Bone's Restaurant", 65.00),
                        array("Umi Sushi Buckhead", 40.50),
                        array("Fandangles", 30.00),
                        array("Capital Grille", 60.50),
                        array("Canoe", 35.50),
                        array("One Flew South", 21.00),
                        array("Fox Bros. BBQ", 15.00),
                        array("South City Kitchen Midtown", 29.00)
                        );
                        
    array_multisort($Restaurant_Name_Price);
    table($Restaurant_Name_Price);
    
    print "<br/>";
    $newArray = array();
    
    foreach($Restaurant_Name_Price as $value){
        array_push($newArray, $value[1]);
    }
    
    array_multisort($newArray, SORT_ASC, SORT_NUMERIC, $Restaurant_Name_Price);
    
    table($Restaurant_Name_Price);
    
    function table($array){
    print "<table>";
    foreach($array as $value){
        print "<tr>";
        print "<td>" . $value[0] . "</td>" . "<td>" . $value[1] . "</td>";
        print "</tr>";
    }
    print "</table>";
    }
    /*
    function sortByPrice(){
        
        
    }
*/    
    ?>
    
    <table>
        <tr></tr>
    </table>

    </body>
</html>