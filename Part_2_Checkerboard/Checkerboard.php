<!doctype html>
<!--
    Created by Keon Hee Park 
    Assignment 3 - PHP Functions and Arrays
    Checkerboard.php
	Course: CSC 4350 - Web Programming
	Instructor: Louis Henry
	Date: September 28, 2016
-->
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/checkerboard.css">
    <title>Part 2</title>
</head>

<body>
    <ul class="tabs primary-nav">
        <li class="tabs-item">
            <a href="../Part_1_Charlie_Lunch/Charlie_Lunch.php" class="tabs-link">Part 1 - Charlie Ate My Lunch!</a>
        </li>
        <li class="tabs-item">
            <a href="Checkerboard.php" class="tabs-link">Part 2 - Checkerboard</a>
        </li>
        <li class="tabs-item">
            <a href="../Part_3_Arrays_Functions/Arrays_Functions.php" class="tabs-link">Part 3 - Arrays and Functions</a>
        </li>
        <li class="tabs-item">
            <a href="../Part_4_Trip_Advisor/Trip_Advisor.php" class="tabs-link">Part 4 - Trip Advisor</a>
        </li>
    </ul>
    <h1><u>PHP Functions and Arrays</u></h1>
    <h2>Checkerboard - Part 2</h2>
    <p>Please create a PHP program that will incorporate TWO for loops which are nested.</p>
    <p>This program should populate a "Checkerboard" using alternating color values are red and black.</p>
    <p>This checkerboard width = "300px". Each cell height and width should = "35px".</p>
    <p>Border set to ="1px" cell padding = "1px" and cell spacing ="1px"</p>

    <hr>
    <?php
        print "<table class='checkerboard'>";
        for($i = 0; $i<10; $i++){
            print "<tr class='checkerboard'>";
        for($j =0; $j<10; $j++){
            $value = ($i%2) + ($j%2);
            if($value == 1){
                print "<td class='red checkerboard'>";
            } else{
                print "<td class='black checkerboard'>";
            }
            print "</td>";
        }
        print "</tr>";
        }
        print "</table>";
    ?>
</body>

</html>