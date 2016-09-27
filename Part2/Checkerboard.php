<!doctype html>
<!-- Created by Keon Hee Park -->
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Part 2</title>
    </head>
    <body>
        <h1><u>PHP Functions and Arrays</u></h1>
        <h2>Part 2:</h2>
        <p>Please create a PHP program that will incorporate TWO for loops which are nested.</p>
        <p>This program should populate a "Checkerboard" using alternating color values are red and black.</p>
        <p>This checkerboard width = "300px". Each cell height and width should = "35px".</p>
        <p>Border set to ="1px" cell padding = "1px" and cell spacing ="1px"</p>
    <?php
        print "<table style='width=300px'>";
        for($i = 0; $i<10; $i++){
            print "<tr>";
        for($j =0; $j<10; $j++){
            $value = ($i%2) + ($j%2);
            if($value == 1){
                print "<td class='red'>";
            } else{
                print "<td class='black'>";
            }
            print "</td>";
        }
        print "</tr>";
        }
        print "</table>";
    ?>
    </body>
</html>