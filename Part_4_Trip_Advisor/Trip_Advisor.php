<!doctype html>
<!-- Created by Keon Hee Park 
    Assignment 3 - PHP Functions and Arrays
	Course: CSC 4350 - Web Programming
	Instructor: Louis Henry
	Date: September 28, 2016
-->
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>Trip Advisor - Part 4</title>
</head>

<body>
    <h1><u>PHP Functions and Arrays</u></h1>
    <h2>Trip Advisor - Part 4</h2>
    <p>According to the Trip Advisor, the 10 best Restaurants in Atlanta based up votes for 2015 are as follows:</p>
    <br>

    <table class="center">
        <tr>
            <th>Restaurant</th>
            <th>Average Cost</th>
        </tr>
        <tr>
            <td>Chama Gaucha</td>
            <td>$40.50</td>
        </tr>
        <tr>
            <td>Aviva by Kameel</td>
            <td>$15.00</td>
            <tr>
                <td>Bone's Restaurant</td>
                <td>$65.00</td>
            </tr>
            <tr>
                <td>Umi Sushi Buckhead</td>
                <td>$40.50</td>
            </tr>
            <tr>
                <td>Fandangles</td>
                <td>$30.00</td>
            </tr>
            <tr>
                <td>Capital Grille</td>
                <td>$60.50</td>
            </tr>
            <tr>
                <td>Canoe</td>
                <td>$35.50</td>
            </tr>
            <tr>
                <td>One Flew South</td>
                <td>$21.00</td>
            </tr>
            <tr>
                <td>Fox Bros. BBQ</td>
                <td>$15.00</td>
            </tr>
            <tr>
                <td>South City Kitchen Midtown</td>
                <td>$29.00</td>
            </tr>
    </table>
    <p>Define an array (or arrays) that holds this information about Name and Average Cost of the 10 best Restaurants in Atlanta.</p>
    <p>Print a table of the Restaurants Name and Restaurants Average Cost for all 10 Restaurants.</p>
    <p>The second part of this program is to write a functions to modify your output that to prints the result of the table ordered by price and a second function to print the resultls </p>

    <hr>

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
    print "<table class='center'>";
    print "<tr>";
    print "<th>Restaurant</th>";
    print "<th>Average Cost</th>";
    print "</tr>";
    foreach($array as $value){
        print "<tr>";
        print "<td>" . $value[0] . "</td>" . "<td>" . $value[1] . "</td>";
        print "</tr>";
    }
    print "</table>";
    } 
    ?>

        <table>
            <tr></tr>
        </table>

</body>

</html>