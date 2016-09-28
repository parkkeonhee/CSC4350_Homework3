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
    <title>Arrays and Functions - Part 3</title>
</head>

<body>
    <h1><u>PHP Functions and Arrays</u></h1>
    <h2>Arrays and Functions - Part 3</h2>
    <p>Program name Arrays and Functions</p>
    <p>Consider the following array.</p>
    <p>$month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');</p>

    <p>Please code in this order</p>
    <ol>
        <li>Write a standard for loop not for-each that prints these months in order.</li>
        <li>Use a function to sort the months in alphabetical order and print months that are now sorted.</li>
        <li>Repeat step 1 and 2 use the <b>for-each</b> statement</li>
    </ol>

    <hr>

    <?php
        $month = array('January', 'February', 'March', 'April',
                        'May', 'June', 'July', 'August',
                        'September', 'October', 'November', 'December');
        
        $month_array_length = count($month);
        
        print "<b>" . "Answer to Question 1: Using a standard for-loop to print the months in order." . "</b>";
        print "<br>";
        
        for($i=0;$i<$month_array_length;$i++){
            print $month[$i] . " ";
        }
        
        print("<br><br>");
        
        print "<b>" . "Answer to Question 2: Use a function to sort the months in alphabetical order using for-loop and print months that are now sorted." . "</b>";
        
        print("<br>");
        
        //Calling sortAlphabetical function.
        sortAlphabeticalForLoop($month, $month_array_length);
        
        //Creating a function with a for-loop to print months in alphabetical order.
        function sortAlphabeticalForLoop($month, $month_array_length){
            //Sorting the array 'month' alphabetically.
            sort($month);
            
            //Printing the array items by looping through every array index.
            for($i=0;$i<$month_array_length;$i++){
                print $month[$i] . " ";
            }
        }
        
        print "<br><br>";
        print "<b>" . "Answer to Question 3: Using a for-each loop to print the months in order." . "</b>";
        print "<br>";
        foreach($month as $value){
            print $value . " ";
        }
        
        print("<br><br>");
        
        print "<b>" . "Answer to Question 4: Use a function to sort the months in alphabetical order using for-each loop and print months that are now sorted." . "</b>";
        
        print("<br>");
        
        sortAlphabeticalForEachLoop($month);
        
        function sortAlphabeticalForEachLoop($month){
            sort($month);
            foreach($month as $value){
                print $value . " ";
            }
        }
?>
</body>

</html>