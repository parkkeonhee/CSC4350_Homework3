<!doctype html>
<!--
    Created by Keon Hee Park 
    Assignment 3 - PHP Functions and Arrays
    Charlie_Lunch.php
	Course: CSC 4350 - Web Programming
	Instructor: Louis Henry
	Date: September 28, 2016
-->
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>Charlie Ate My Lunch! - Part 1</title>
</head>

<body>
    <ul class="tabs primary-nav">
        <li class="tabs-item">
            <a href="Charlie_Lunch.php" class="tabs-link">Part 1 - Charlie Ate My Lunch!</a>
        </li>
        <li class="tabs-item">
            <a href="../Part_2_Checkerboard/Checkerboard.php" class="tabs-link">Part 2 - Checkerboard</a>
        </li>
        <li class="tabs-item">
            <a href="../Part_3_Arrays_Functions/Arrays_Functions.php" class="tabs-link">Part 3 - Arrays and Functions</a>
        </li>
        <li class="tabs-item">
            <a href="../Part_4_Trip_Advisor/Trip_Advisor.php" class="tabs-link">Part 4 - Trip Advisor</a>
        </li>
    </ul>
    <h1 class="center"><u>PHP Functions and Arrays</u></h1>
    <h2 class="center">Charlie Ate My Lunch! - Part 1</h2>
    <p class="center">Charlie will eat your lunch exactly 50% of the time. Write a function and name isBitten() that returns TRUE with 50% probability, and FALSE otherwise.</p>
    <p class="center">Hint: You may find the rand() function useful.</p>
    <p class="center">Below the function, write code to generate a webpage that displays "Charlie ate my lunch!" or "Charlie did not eat my lunch!" using the isBitten() function</p>

    <hr>
    <?php
    function isBitten(){
    $randomNumber = mt_rand (0, 10) * 10;
    if($randomNumber <= 50){
        print "Charlie " . "<strong>" . "ate" . "</strong>" ." my lunch with " . "<strong>" . $randomNumber ."%". "</strong>" . " probability.";
        print "<br>";
        print "<strong>" . $randomNumber . "%" . "</strong>" . " probability" . " > " . "50%";
        print "<br><br>";
    } else{
        print "Charlie " . "<strong>" . "did not " . "</strong>" . "eat my lunch with " . "<strong>" . $randomNumber ."%". "</strong>" . " probability.";
        print "<br>";
        print "<strong>" . $randomNumber . "%" . "</strong>" . " probability" . " < " . "50%";
        print "<br><br>";
    }
    if($randomNumber <= 50){
        return true;
    }else{
        return false;
        }
    }

    if(isBitten() === true){
        print "Charlie ate my lunch!";
    }else{
        print "Charlie did not eat my lunch!";
    }
?>
</body>

</html>