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
    <title>Charlie Ate My Lunch! - Part 1</title>
</head>

<body>
    <h1 class="center"><u>PHP Functions and Array</u></h1>
    <h2 class="center">Charlie Ate My Lunch! - Part 1</h2>
    <p class="center">Charlie will eat your lunch exactly 50% of the time. Write a function and name isBitten() that returns TRUE with 50% probability, and FALSE otherwise.</p>
    <p class="center">Hint: You may find the rand() function useful.</p>
    <p class="center">Below the function, write code to generate a webpage that displays "Charlie ate my lunch!" or "Charlie did not eat my lunch!" using the isBitten() function</p>

    <hr>
    <?php
    function isBitten(){
    $randomNumber = mt_rand (0, 10) * 10;
    print $randomNumber ."%". "<br>";
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