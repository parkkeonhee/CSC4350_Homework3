<!doctype html>
<!-- Created by Keon Hee Park -->
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Part 2</title>
</head>

<body>
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