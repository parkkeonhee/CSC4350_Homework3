<html>
    <body>
    <?php
    $Restaruant_Name_Price = array(
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
                        
    array_multisort($Restaruant_Name_Price);
    table($Restaruant_Name_Price);
    
    print "<br/>";
    $newArray = array();
    
    foreach($Restaruant_Name_Price as $value){
        array_push($newArray, $value[1]);
    }
    
    array_multisort($newArray, SORT_ASC, SORT_NUMERIC, $Restaruant_Name_Price);
    
    table($Restaruant_Name_Price);
    
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